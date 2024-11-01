import React, { useEffect, useState } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import '../styles/styles.css';

const BookDetails = ({ onNotify }) => {
    const { id } = useParams();
    const navigate = useNavigate();
    const [book, setBook] = useState(null);
    const [error, setError] = useState('');

    useEffect(() => {
        const fetchBookDetails = async () => {
            try {
                const response = await fetch(`http://localhost:8000/api/books/${id}`);
                if (!response.ok) throw new Error('Failed to fetch book details');
                const data = await response.json();
                setBook(data);
            } catch (error) {
                setError(error.message);
                console.error(error);
            }
        };
        fetchBookDetails();
    }, [id]);

    if (error) return <div className="error">{error}</div>;
    if (!book) return <div className="loading">Loading...</div>;

    const handleDelete = async () => {
        if (window.confirm('Are you sure you want to delete this book?')) {
            try {
                await fetch(`http://localhost:8000/api/books/${id}`, { method: 'DELETE' });
                onNotify('Book deleted successfully!');
                navigate('/'); // Navigate back to the book list
            } catch (error) {
                setError('Failed to delete the book.');
                console.error(error);
            }
        }
    };

    return (
        <div className="details-container">
            <h2>{book.title}</h2>
            <p><strong>Author:</strong> {book.author}</p>
            <p><strong>Published Year:</strong> {book.published_year}</p>
            <p><strong>Genre:</strong> {book.genre}</p>
            <p><strong>Description:</strong> {book.description}</p>
            <button onClick={() => navigate('/')} className="back-button">Back</button>
            
        </div>
    );
};

export default BookDetails;
