import React, {useState, useEffect, useRef} from "react"; 

function StopWatch(){ 

    const [isRunning, setIsRunning] = useState(false); 
    const [elapsedTime, setElapsedTime] = useState(0);  
    const intervalRef = useRef(null); 
    const startTimerRef =  useRef(0); 

    useEffect(() => {

        if(isRunning){ 
           intervalRef.current = setInterval(() => { 
                setElapsedTime(Date.now() - startTimerRef.current);
            }, 10); 
            
            return () => { 
                clearInterval(intervalRef.current)
            }
            
        }

    }, [isRunning]); 

    function start(){ 
         setIsRunning(true); 
         startTimerRef.current = Date.now() - elapsedTime; 
    }
    function stop(){
        setIsRunning(false);
    } 
    function reset(){ 
        setElapsedTime(0);
        setIsRunning(false);
    }
    function formatTime(){
        
        let hours = Math.floor(elapsedTime / (1000 * 60 * 60)) 
        let minutes = Math.floor(elapsedTime / (1000 * 60 ) % 60)  ; 
        let seconds = Math.floor(elapsedTime / (1000 ) % 60)  ; 
        let milliseconds = Math.floor((elapsedTime % 1000 ) / 10)  ;  

        hours = String(hours).padStart(2, "0"); 
        minutes = String(minutes).padStart(2, "0"); 
        seconds = String(seconds).padStart(2, "0"); 
        milliseconds = String(milliseconds).padStart(2, "0"); 

        return `${minutes}:${seconds}:${milliseconds}`;

    } 
    
    return(
       <div className="stopwatch-container">
        <div className="display-time">     {elapsedTime > 3000 ? "I miss you" : formatTime()}  </div>
        <div className="stopwatch-controls">
            <div className="stopwatch-button" id="start-button" onClick={start}>Start</div>
            <div className="stopwatch-button"  id="stop-button" onClick={stop}>Stop</div>
            <div className="stopwatch-button" id="reset-button" onClick={reset}> Reset</div>
        </div>
           
     
       </div>
    )
} 

export default StopWatch