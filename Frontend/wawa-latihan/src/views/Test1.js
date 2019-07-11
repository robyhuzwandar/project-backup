import React from 'react';
import {connect} from 'react-redux';
import {hitungPangkat} from '../actions';

const mapStateToProps=(state)=>{
	return {
		state:state
	}
}

class Test1 extends React.Component{
	handleCalculate=this.handleCalculate.bind(this)
	handleCalculate(){
		this.props.dispatch(hitungPangkat(this.refs))
	}
	render(){
		return(
			<div className="row">
				<div className="col-lg-12 boxpage">
					<div className="col-lg-12">
						<div className="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<label>Masukkan Angka</label>
							<input className="form-control text-right" type="number" ref={"angka"} />
						</div>
						<div className="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<label>Masukkan Pangkat</label>
							<input className="form-control text-right"  type="number" ref={"pangkat"} />
						</div>
						<div className="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-left">
							<button  style={{marginTop:'20px'}} className="btn btn-danger" onClick={()=>this.handleCalculate()}>Hitung</button>
						</div>
					</div>
					<div className="col-xs-12">
						<div className="col-md-3 col-xs-12">
							<label>Hasil Pangkat </label>
							<div className="hasil bggreen"><label>{this.props.state.hasil}</label></div>
						</div>
						<div className="col-md-3 col-xs-12">
							<label>Hasil Tambah </label>
							<div className="hasil bggreen"><label>{this.props.state.hasiltambah}</label></div>
						</div>
					</div>
				</div>
			</div>
		)
	}
}
module.exports=connect(mapStateToProps)(Test1);