import React, {useState, useEffect, useRef} from 'react'

function UseRef(){ 

    const inputRef1 = useRef(null);
    const inputRef2 = useRef(null);
    const inputRef3 = useRef(null);
    const inputRef4 = useRef(null);
    useEffect(() => { 
            console.log("COMPONENT RENDERED")
        });

    function handleClck1(){ 
        inputRef1.current.focus(); 
        inputRef1.current.style.backgroundColor = "yellow";
        inputRef2.current.style.backgroundColor = "";
        inputRef3.current.style.backgroundColor = "";
    }
    
    function handleClck2(){ 
        inputRef2.current.focus(); 
        inputRef2.current.style.backgroundColor = "yellow";
        inputRef1.current.style.backgroundColor = "";
        inputRef3.current.style.backgroundColor = "";
    }
 
    function handleClck3(){ 
        inputRef3.current.focus(); 
        inputRef3.current.style.backgroundColor = "yellow";
        inputRef2.current.style.backgroundColor = "";
        inputRef1.current.style.backgroundColor = "";
    }
       function handleClick4(){ 
        inputRef4.current.focus();
        inputRef4.current.style.backgroundColor = "green";
    }

    return(
        <duv>
            <button onClick={handleClck1}> 
                Clcik me 1!
            </button> 
            <input ref={inputRef1} /> 

             <button onClick={handleClck2}> 
                Clcik me 2!
            </button> 
            <input ref={inputRef2} />

             <button onClick={handleClck3}> 
                Clcik me 3!
            </button> 
             <input ref={inputRef3} />
             <button onClick={handleClick4}> 
                Clcik me 4!
            </button> 
            <input ref={inputRef4} />
        </duv>
    )
    }

    export default UseRef