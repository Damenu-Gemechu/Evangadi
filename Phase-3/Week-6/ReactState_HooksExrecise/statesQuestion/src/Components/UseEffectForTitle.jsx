import "./UseEffectForTitle.css"
import React, { useState, useEffect } from 'react';

const UseEffectForTitle = () => {
  const [clickCount, setClickCount] = useState(0);

  useEffect(() => 
  {alert('Component is mounted');}, []); 
  // Empty dependency array ensures the effect runs only once

  useEffect(() => {
    document.title = `Click Count: ${clickCount}`;
  }, [clickCount]); // Run the effect whenever clickCount changes

  const handleButtonClick = () => {
    setClickCount((prevCount) => prevCount + 1);
  };

  return (
    <div className='useeffect'>
        <h3 id="q4">Question:4</h3>
      <button onClick={handleButtonClick}>Click</button>
      <p>Click Count: {clickCount}</p>
    </div>
  );
};

export default UseEffectForTitle;