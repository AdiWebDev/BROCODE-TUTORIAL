import Header from "./Header.jsx"; 
import Footer from "./Footer.jsx"; 
import Card from "./Card.jsx"; 
import Student from "./Student.jsx"; 
import UserGreeting from "./UserGreeting.jsx"; 
import List from "./List.jsx"; 
import Button from "./Button.jsx"; 
import MyComponent from "./UseState.jsx"; 
import Counter from "./Counter.jsx"; 
import OnChange from "./OnChange.jsx"; 
import ColorPicker from "./ColorPicker.jsx"; 
import MultipleUseState from "./MultipleUseState.jsx";
import BaconAvocado from "./BaconAvocado.jsx";
import AddRemove from "./UseStateAddRemove.jsx"; 
import ModifyCar from "./CarModified.jsx"; 
import ToDoList from "./ToDo.jsx"; 
import Useeeeffect from "./UseEffect.jsx" 
import Resize from "./Resize.jsx";  
import DigitalClock from "./DigitalClock.jsx"; 
import ComponentA from "./ComponetA.jsx";
import CounterExample from "./CounterExample.jsx"; 
import UseRef from "./UseRef.jsx";
import StopWatch from "./Stopwatch.jsx";
function App() { 


    const fruits = [{ id: 1,  name: "apple", calories: 95}, 
                      { id: 2, name: "orange", calories: 90 }, 
                      { id: 3, name: "banana", calories: 85}, 
                      { id: 4, name:"cococnut", calories: 80 },
                      { id: 5, name:"pineapple",  calories: 70} ]; 
    const vegetables =   [{ id: 1,  name: "potatoes", calories: 110}, 
                          { id: 2, name: "celery", calories: 15 }, 
                          { id: 3, name: "carrots", calories: 25}, 
                          { id: 4, name:"corn", calories: 64 },
                          { id: 5, name:"brococoli",  calories: 50} ]; 
  return( 
    <> 
    Nav bar example
      <Header/> 
    
    {/* Card example */}
      <Card/> 

      {/* Student example */}
      <Student name="Spongebob" age={30} isStudent={true}/> 
      {/* Default Student exmaple */}
      <Student  />  
      {/* Greeting with iternary condition */}
       <UserGreeting isLoggedIn={true}/>
     {/* Footer example */}
      <Footer/> 
      {/* List example */} 
     { fruits.length > 0 && <List items={fruits} category="Fruits"/>}
     { vegetables.length > 0 && <List items={vegetables} category="Vegetables"/> } 
   
    <Button></Button> 

    <MyComponent/> 
    <Counter/>  

    <OnChange></OnChange> 
    <ColorPicker></ColorPicker> 
    <MultipleUseState/> 
    <AddRemove/>
    <BaconAvocado/> 
    <ModifyCar/> 

    <ToDoList/> 

    <Useeeeffect/> 
    <Resize/> 
    <DigitalClock/> 
    <ComponentA/> 
    <CounterExample/>

    <UseRef/> 
    <StopWatch/>
    </> 

  ); 
}

export default App
