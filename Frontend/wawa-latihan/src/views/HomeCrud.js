import React from 'react';

export default class HomeCrud extends React.Component {
    constructor(props) {
        super(props);
        this.state = { test: 'test' }
    }

    
    componentDidMount() {
        console.log("componentDidMount")
        this.setState({ test: 'test1' });
    }

    componentWillMount() {
        console.log("componentWillMount")
        this.setState({ test: 'test2' });
    }

    render() {
        console.log("render");
        const { test } = this.state;
        return (
            <div className="row">
                <div className="container">
                    <div className="col-xs-12">
                        {test}
                    </div>
                </div>
            </div>
        )
    }
}