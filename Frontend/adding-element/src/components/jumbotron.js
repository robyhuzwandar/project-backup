import React, { Component } from 'react';

export default class Jumbotron extends Component {

    onClick= (get)=>{
        alert(get)
    }

    render() {
        return (
            <div>
                <div className="jumbotron jumbotron-fluid">
                    <div className="container">
                        <h1 className="display-4">{ this.props.title}</h1>
                        <p className="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                        <p className="lead">
                            <a onClick={this.onClick.bind(this, "Hello")} className="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>

        )
    }
}
