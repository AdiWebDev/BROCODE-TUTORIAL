import React, {useState, useEffect} from "react";

function Resize() { 
    const [width, setWidth] = useState (window.innerWidth); 
    const [height, setHeigth] = useState (window.innerHeight);  

    useEffect(() => { 
        window.addEventListener("resize", handleResize); 
    })
    function handleResize(){ 
        setWidth(window.innerWidth); 
        setHeigth(window.innerHeight);
    }
    return( 
        <>
        <p>Window Width: {width}px</p>
        <p>Window Height: {height}px </p>
        </>
    )
}
export default Resize