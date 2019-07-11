import React from 'react'

export default class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {isToggleOn: true};

    // This binding is necessary to make `this` work in the callback
    this.handleClick = this.handleClick.bind(this);
  }

  handleClick() {
    this.setState(prevState => ({
      isToggleOn: !prevState.isToggleOn
    }));
   console.log(this.state.isToggleOn)


  }

  render() {
    return (
      <button onClick={this.handleClick}>
        {this.state.isToggleOn ? 'LOGIN' : 'LOGOUT'}
      </button>
    );
  }
}