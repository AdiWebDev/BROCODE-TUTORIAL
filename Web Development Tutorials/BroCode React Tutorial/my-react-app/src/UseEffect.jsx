import React, {useState, useEffect} from "react";

function Useeeeffect(){ 
  const [count, setCount] = useState(0); 
    const [color, setColor] = useState("green");
    useEffect(() => { 
        document.title = `Count: ${count}  ${color}`;
    }, [count, color]);
  function addCount(){ 
    setCount(prevCount => prevCount +1);  
  } 

   function subtractCount(){ 
    setCount(prevCount => prevCount - 1);  
  } 
    
  function changeColor(){ 
    setColor( prevcolor => prevcolor === "green" ? "tomato" : "green");  
  } 


  return ( 
    <> 
    <p style={{color: color}}>Count: {count}</p> 
    <button onClick={addCount}>Add</button>
     <button onClick={subtractCount}>Subtract</button>
     <button onClick={changeColor}>Color</button> 
    
    </>
  )
} 

export default Useeeeffect