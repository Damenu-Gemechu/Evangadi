import React, { Component } from 'react';
import CounterDisplayer from './CounterDisplayer';
import EvenCounterDisplayer from './EvenCounterDisplayer';
import './MyCounter.css';
class MyCounter extends Component {
  constructor(props) {
    super(props);
    this.state = {
      clickCount: 0
    };
  }

  allClicksCounter = () => {
    this.setState((prevState) => ({
      clickCount: prevState.clickCount + 1
    }));
  };

  render() {
    return (
      <div className='damenu'>
        <h3 id="q">Question:1</h3>
        <button onClick={this.allClicksCounter}>Click</button>
        
        <CounterDisplayer clickCount={this.state.clickCount} />
        <h3 id="q">Question:2</h3>
        <EvenCounterDisplayer clickCount={this.state.clickCount} />
      </div>
    );
  }
}

export default MyCounter;