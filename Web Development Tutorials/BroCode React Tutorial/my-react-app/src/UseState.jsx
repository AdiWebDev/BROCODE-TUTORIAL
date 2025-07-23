import React, {useState} from "react"; 

function MyComponent(){ 
    const [name, setName] = useState("Guest");
    const [age, setAge] = useState(0); 
    const [isEmployed, setIsEmployed] = useState(false); 

    const updateName = () => {
        setName ("Spongebob"); 
    } 
    const updateAge = () => { 
        setAge (age + 1);
    } 
    const toggleEmployedStatus = () => { 
        setIsEmployed(true);
    }


    return (
        <div>
            <p>Name: {name}</p> 
            <button onClick={updateName}>SetName</button> 
            <p>Age: {age}</p> 
            <button onClick={updateAge}>Increment Age</button> 
             <p>Is Employed: {isEmployed ? "Yes" : "No"}</p> 
            <button onClick={toggleEmployedStatus}>Toggle</button> 
        </div>
    )
} 

export default MyComponent;