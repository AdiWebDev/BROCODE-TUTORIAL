import React, { useState, useRef } from "react";

function CounterExample() {
  const [stateCount, setStateCount] = useState(0); // Triggers re-render
  const refCount = useRef(0);                      // Does NOT trigger re-render

  function handleStateClick() {
    setStateCount(stateCount + 1);
  }

  function handleRefClick() {
    refCount.current += 1;
    console.log("Ref count (no re-render):", refCount.current);
  }

  return (
    <div>
      <h2>useState Count (Triggers Re-render)</h2>
      <p>State Count: {stateCount}</p>
      <button onClick={handleStateClick}>Increment useState</button>

      <h2>useRef Count (No Re-render)</h2>
      <p>Ref Count (Check Console): {refCount.current}</p>
      <button onClick={handleRefClick}>Increment useRef</button>
    </div>
  );
}

export default CounterExample;
