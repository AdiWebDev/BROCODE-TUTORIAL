import { set } from 'mongoose';
import React, {useState} from 'react';

function ToDoList(){ 

    const [tasks, setTasks] = useState(["Eat Breakfast", "Take a shower", "Walk the dog"]); 
    const [newTask, setNewTask] = useState(" "); 

    function handleInputChange(event){ 
        setNewTask(event.target.value);
    }
    function addTask(){  

        if(newTask.trim() !== ""){ 
            setTasks( t => [...t, newTask]);
            setNewTask("");
            }

        }
  
    function deleteTask(index){ 
        const UpdatedTask = tasks.filter((_, i) => i !== index); 
        setTasks(UpdatedTask);
    }
     function moveTaskUp(index){ 
        if(index > 0){ 
            const UpdatedTask = [...tasks]; 
            [UpdatedTask[index], UpdatedTask[index - 1]] =
            [UpdatedTask[index - 1], UpdatedTask[index]];  
            setTasks(UpdatedTask);
        }
    }
     function moveTaskDown(index){ 
         if(index < tasks.length - 1){ 
            const UpdatedTask = [...tasks]; 
            [UpdatedTask[index], UpdatedTask[index + 1]] =
            [UpdatedTask[index + 1], UpdatedTask[index]];  
            setTasks(UpdatedTask);
        }
    }


     return(
        <div className='to-do-list'> 
        
           <h1>To-Do-List</h1>

           <div>
                <input className='input-todo' type="text" placeholder="Enter a task.."
                 onChange={handleInputChange}
                 value={newTask} /> 

                 <button className="add-button"
                        onClick={addTask}>
                    Add
                 </button>
           </div> 


           <ol>
            {tasks.map((task, index) => 
                <li key={index}>
                    <span className='text'>{task}</span> 
                    <button className="delete-button" 
                            onClick={()=>deleteTask(index)}>
                            Delete</button> 

                    <button className="move-button"
                            onClick={()=>moveTaskUp(index)}>
                            Up</button> 

                    <button className="move-button"
                            onClick={()=>moveTaskDown(index)}>
                            Down</button>
                </li>)}
           </ol>
        </div>
        );
  
} 
export default ToDoList