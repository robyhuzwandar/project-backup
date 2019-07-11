import React, { Component } from 'react';
import './App.css';
import Jumbotron from './components/jumbotron';

class App extends Component {
  render() {
    return (
      <div className="App">
          <Jumbotron title="This Is Title"/>
      </div>
    );
  }
}

export default App;
