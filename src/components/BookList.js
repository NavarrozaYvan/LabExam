import React from 'react';
import { Link } from 'react-router-dom';
import '../styles/styles.css';

const BookList = ({ books, onDelete }) => {
    return (
        <div>
            <div>
                <h2>Book List</h2>
                <Link to="/add" className="button button-edit">Add New Book</Link>
            </div>
            <div className="book-list">
                {books.map((book) => (
                    <div className="card" key={book.id}>
                        <div className="card-content">
                            <h3 className="card-title">{book.title}</h3>
                            <p>Author: {book.author}</p>
                        </div>
                        <div>
                            <Link to={`/view/${book.id}`} className="button button-view">View</Link>
                            <Link to={`/edit/${book.id}`} className="button button-edit">Edit</Link>
                            <button onClick={() => onDelete(book.id)} className="button button-delete">Delete</button>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default BookList;