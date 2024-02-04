import React, { Component } from 'react';
import CounterDisplayer from './CounterDisplayer';

class MyCounter extends Component {
  constructor(props) {
    super(props);
    this.state = {
      clickCount: 0
    };
  }

  allClicksCounter = () => {
    this.setState({ clickCount: this.state.clickCount + 1 });
  };

  render() {
    return (
      <div className='div'>
        <button id="btn" onClick={this.allClicksCounter}>Click me</button>
        <CounterDisplayer clickCount={this.state.clickCount} />
      </div>
    );
  }
}

export default MyCounter;