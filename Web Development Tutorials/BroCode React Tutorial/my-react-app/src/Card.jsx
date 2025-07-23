import profilepic from "./assets/dion.jpg";

function Card() { 
    return(
        <div className="card">
            <img src={profilepic} className="card-image" alt="Profile Picture" /> 
            <h2 className="card-title">Dion</h2>
            <p className="card-text">Watching Progamming Tutorials and play video games.

            </p>
        </div>
    );
}
export default Card