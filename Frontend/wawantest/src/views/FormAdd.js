import React, { Component } from 'react';
import { Const } from '../const/Const';
import { wpost } from 'wawanajax';
import { addData, toogleAddView } from '../actions';
import { connect } from 'react-redux';


const mapStateToProps = (state) => {
    return { state: state }
}

export default class FormAdd extends Component {

    handleSaveData = this.handleSaveData.bind(this);
    handleToogleAdd = this.handleToogleAdd.bind(this);
    handleToogleAdd = this.handleToogleAdd.bind(this)

    handleSaveData(callback, scope) {
        console.log("masuk handle save")
        console.log(callback)
        this.props.dispatch(addData(callback));
        this.props.getDataFromAPI();
    }

    SaveData() {
        var _data = JSON.stringify({
            name: this.refs.name.value,
            phone: this.refs.phone.value,
            address: this.refs.address.value,
            email: this.refs.email.value
        });
        console.log("ini isis input", _data)
        var api = Const.api + 'api/v1/person';
        wpost(this, api, _data, this.handleSaveData)
        this.refs.name.value = '';
        this.refs.address.value = '';
        this.refs.phone.value = '';
        this.refs.email.value = '';
    }

    handleToogleAdd() {
        this.props.dispatch(toogleAddView(!this.props.state.keyToogle))
        console.log("key toogle : " ,!this.props.state.keyToogle )
    }

    BatalhandleToogleAdd(){
        this.props.dispatch(toogleAddViewBatal(false))
    }

    render() {

        if (this.props.state.keyToogle) {
            return (
                <div>
                    <div className="row">
                        <div className="col col-md-2">
                            <div className="form-group">
                                <label>Name</label>
                                <input type="text" className="form-control" ref="name" required />
                            </div>
                        </div>


                        <div className="col col-md-2">
                            <div className="form-group">
                                <label>Address</label>
                                <input type="text" className="form-control" ref="address" required />
                            </div>
                        </div>


                        <div className="col col-md-2">
                            <div className="form-group">
                                <label>Phone</label>
                                <input type="text" className="form-control" ref="phone" required />
                            </div>
                        </div>


                        <div className="col col-md-2">
                            <div className="form-group">
                                <label>Email</label>
                                <input type="text" className="form-control" ref="email" required />
                            </div>
                        </div>
                        <br />
                    </div>

                    <div className="form-group">
                        <button onClick={() => this.SaveData()} className="btn btn-primary">Save</button>
                        <button onClick={ ()=> this.BatalhandleToogleAdd()} className="btn btn-danger">Batal</button>
                    </div>
                </div>
            )
        }else{
            return(
                <div>
                    <button onClick={ ()=> this.handleToogleAdd()} className="btn btn-primary">Add</button>
                </div>
            )
        }
    }
}
module.exports = connect(mapStateToProps)(FormAdd);