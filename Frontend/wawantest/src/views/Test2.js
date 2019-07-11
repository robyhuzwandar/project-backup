import React from 'react';
import {connect} from 'react-redux';
import {checkData} from '../actions';

const mapStateToProps=(state)=>{
	return {state:state}
}

const Items=(props)=>{
	if (props.state.formData.length>0){
		var listViewItems=props.state.formData.map((items,i)=>{
			return (<tr key={i}>
						<td>{items.nomor}</td>
						<td>{items.angka}</td>
					</tr>
			)
		});
		return (
			<table className="table table-bordered">
				<thead>
					<tr>
						<th width={"20px"} >Nomor</th>
						<th>Data</th>
					</tr>
				</thead>
				<tbody>
					{listViewItems}
				</tbody>
			</table>
		);
	}else {
		return (<p style={{marginTop:'20px',color:'red'}}>Nilai Awal atau Nilai Akhir belum di isi/ nilai akhir lebih kecil dari 3</p>);
	}
}

const ListItems=connect(mapStateToProps)(Items);

class Test2 extends React.Component{
	handleCheck=this.handleCheck.bind(this)
	handleCheck(){
		this.props.dispatch(checkData(this.refs))
	}
	render(){
		return(
			<div className="row">
				<div className="col-lg-12 boxpage">
					<div className="col-lg-8 test2">
						<div className="col-xs-4 ">
							<label>Nilai Awal</label>
							<input className="form-control text-right" type="number" ref={"awal"} />
						</div>
						<div className="col-xs-4 ">
							<label>Nilai Akhir</label>
							<input className="form-control text-right"  type="number" ref={"akhir"} />
						</div>
						<div className="col-xs-2 text-left">
							<button  style={{marginTop:'20px'}} className="btn btn-danger" onClick={()=>this.handleCheck()}>Check</button>
						</div>
					</div>
					<div className="col-lg-4 col-xs-12">
						<ListItems/>
					</div>

				</div>
			</div>
		)
	}
}
module.exports=connect(mapStateToProps)(Test2);