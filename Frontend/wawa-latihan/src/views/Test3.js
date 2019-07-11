import React from 'react';
import {connect} from 'react-redux';
import {getDataKontak,editKontak} from '../actions';
import {Const} from './../const/Const';
import {wget,wpost,wput,wdelete} from 'wawanajax';
import FormAddView from './FormAddView';

const mapStateToProps=(state)=>{
	return {state:state}
}

const Items=(props)=>{
	if (props.state.detailKontak.result.length>0){
		var listViewItems=props.state.detailKontak.result.map((items,i)=>{
			console.log(items);
			return (<tr key={i}>
						<td>{i+Number(1)}</td>
						<td>{items.name}</td>
						<td><img src={items.picture} /></td>
						<td>{items.address}</td>
						<td>{items.phone}</td>
						<td>{items.email}</td>
						<td><button onClick={()=>props.handleEdit(items)} style={{width:'40px'}} className="btn btn-default text-center"><i className="fa fa-edit" ></i></button>  <button onClick={()=>props.handleDelete(items.id)} style={{width:'40px'}} className="btn btn-danger"><i className="fa fa-trash" ></i></button></td>
					</tr>
			)
		});
		return (
			<div className="col-xs-12">
				<table className="table table-bordered">
					<thead>
						<tr>
							<th width={"20px"} >No.</th>
							<th>Nama</th>
							<th>Foto</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Email</th>
							<th width="8%"></th>
						</tr>
					</thead>
					<tbody>
						{listViewItems}
					</tbody>
				</table>
			</div>
		);
	}else {
		return (<p style={{marginTop:'20px',color:'red'}}>Data Masih Kosong</p>);
	}
}

const ListItems=connect(mapStateToProps)(Items);

class Test3 extends React.Component{
	handleDataContak = this.handleDataContak.bind(this)
	handleDelete     = this.handleDelete.bind(this)
	handleEdit       = this.handleEdit.bind(this)
	getData          = this.getData.bind(this)
	handleDataContak(callback,props){
		this.props.dispatch(getDataKontak(callback))
	}
	
	getData(){
		var api=Const.api+'api/v1/person';
		wget(this,api,{},this.handleDataContak);
	}
	componentDidMount(){
		this.getData();
	}
	handleDelete(uid){
		var api=Const.api+'api/v1/person/'+uid;
		wdelete(this,api,{},this.getData);
	}
	handleEdit(aData){
		this.props.dispatch(editKontak("edit",aData));
	}
	render(){
		return(
			<div className="row">
				<div className="col-lg-12 boxpage">
					<FormAddView getData={this.getData} />
					<div className="col-lg-12">
						<ListItems handleDelete={this.handleDelete} handleEdit={this.handleEdit}/>
					</div>
				</div>
			</div>
		)
	}
}
module.exports=Test3;