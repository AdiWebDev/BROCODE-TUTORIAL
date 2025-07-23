import PropTypes from "prop-types";

function List(props){ 
    const category = props.category;
    const itemList = props.items; 
    


//  fruits.sort((a,b) => a.name.localeCompare(b.name)) ; //For Alphabetical Order
//  fruits.sort((a,b) => b.name.localeCompare(a.name)) ; //For Reverse Alphabetical Order
// fruits.sort((a, b)=> a.calories - b.calories);  //  Numerical Order
// fruits.sort((a, b)=> b.calories - a.calories);  // Reverse Numerical Order

//  const lowCalFruits = fruits.filter(fruit =>  fruit.calories <=85); //Dito ididsplay niya lang yung calories na lest than or equal 80

 const listitems = itemList.map(item => <li key = {item.name}>
                                            {item.name}: &nbsp; 
                                            <b>{item.calories}</b></li>);
    return(<>
            <h3 className="list-category"> {category}</h3>
            <ol className="list-items">{listitems}</ol>
          </>);
}  

List.propTypes = { 
    category: PropTypes.string, 
    items: PropTypes.arrayOf(
        PropTypes.shape({
            id: PropTypes.number,
            name: PropTypes.string,
            calories: PropTypes.number,
        })
    ),
};
List.defaultProps = { 
    category: "Category", 
    items: [],
}
export default List




