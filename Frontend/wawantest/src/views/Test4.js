import React from 'react';
import { connect } from 'react-redux';
import { addHtmlString } from '../actions';

const mapStateToProps = (state) => {
    console.log("Map State To State");
    console.log(state)
    return { state: state }
}

const htmlString = (props) => {
    console.log("HTML String")
    console.log(props)
    return (
        <div>
            <hr />
            <h1> {props.state.testString} </h1>
        </div>
    )
}
const CompString = connect(mapStateToProps)(htmlString);    

export default class Test4 extends React.Component {

    handleString = this.handleString.bind(this);

    handleString() {
        console.log("Masuk ke hendle String")
        console.log(this.refs.stringInput.value)
        console.log(addHtmlString)
        this.props.dispatch(addHtmlString("editString", { dataBaru: this.refs.stringInput.value }));
    }

    render() {
        return (
            <div>
                <div className="container">
                    <div className="row">
                        <div className="col-md-6">
                            <input ref="stringInput" /> <br />
                            <button onClick={() => this.handleString()}> Submit</button>
                            <CompString />
                        </div>
                    </div>
                </div>
            </div>
        )
    }

}
