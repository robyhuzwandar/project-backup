import React from 'react';
import { connect } from 'react-redux';
import { Const } from './../const/Const';
import { wget, wdelete } from 'wawanajax';
import { GetDetailsContact } from '../actions';
import FormAdd from './FormAdd';

const mapStateToProps = (state) => {
    return { state: state }
}

const Items = (props) => {
    console.log(props)
    if (props.state.kontak.length > 0) {
        console.log(props.state.kontak.length)
        var listViewItem = props.state.kontak.map((items, idx) => {
            return(
            <tr key={idx}>
                <td>{idx + Number(1)}</td>
                <td>{items.name}</td>
                <td>{items.picture}</td>
                <td>{items.address}</td>
                <td>{items.phone}</td>
                <td>{items.email}</td>
                <td>
                    <button className="btn btn-warning">Edit</button>
                    <button onClick={()=> props.handleDelete(items.id)} className="btn btn-danger">Hapus</button>
                </td>
            </tr>
            )
        })
    } else {
        return (<p style={{ marginTop: '20px', color: 'red' }}>Data Masih Kosong</p>);
    }

    return (
        <div>
            <div className="row">
                <div className="col-md-12">
                    <table className="table table-bordered">
                        <thead>
                            <tr>
                                <th width={"20px"} >No.</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th width="8%">Option</th>
                            </tr>
                        </thead>

                        <tbody>
                            {listViewItem}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    )
}

const ComponentItems = connect(mapStateToProps)(Items)

export default class Test5 extends React.Component {

    HandleDetailsContact = this.HandleDetailsContact.bind(this);
    handleDelete = this.handleDelete.bind(this);
    getDataFromAPI = this.getDataFromAPI.bind(this);

    componentDidMount() {
        console.log("did mount")
        this.getDataFromAPI()
    }

    HandleDetailsContact(callback, props) {
        console.log("handle Details")
        console.log(callback)
        this.props.dispatch(GetDetailsContact("GetDetailsContact", callback.result));
    }
    

    getDataFromAPI() {
        var api = Const.api + 'api/v1/person';
        wget(this, api, {}, this.HandleDetailsContact)
    }

    handleDelete(id){
        var api = Const.api+'api/v1/person/'+id;
        wdelete(this,api,{},this.getDataFromAPI);
    }

    render() {
        return (
            <div>
                <div className="container">
                    <FormAdd getDataFromAPI={this.getDataFromAPI}/>
                    <ComponentItems handleDelete={this.handleDelete}/>
                </div>
            </div>
        )
    }
}