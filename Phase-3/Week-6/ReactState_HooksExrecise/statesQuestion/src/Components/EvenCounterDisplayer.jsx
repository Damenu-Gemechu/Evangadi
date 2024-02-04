import React from 'react';

const EvenCounterDisplayer = (props) => {
  const evenClickCount = Math.floor(props.clickCount / 2) * 2;
  return <p>Clicked {evenClickCount} times</p>;
};

export default EvenCounterDisplayer;