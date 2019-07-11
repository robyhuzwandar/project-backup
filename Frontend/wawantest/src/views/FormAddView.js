import React from 'react';
import { connect } from 'react-redux';
import { toogleAdd, addKontak, errorMsg, handleBatal } from '../actions';
import { wget, wpost, wput } from 'wawanajax';
import { Const } from './../const/Const';

const mapStateToProps = (state) => {
	return { state: state }
}
class FormAddView extends React.Component {
	handleSave = this.handleSave.bind(this)
	handleUpdate = this.handleUpdate.bind(this)
	handleBatal = this.handleBatal.bind(this)
	handleToggleAdd = this.handleToggleAdd.bind(this)
	handleSaveKontak = this.handleSaveKontak.bind(this);
	handleAfterUpdate = this.handleAfterUpdate.bind(this);
	handleUpload = this.handleUpload.bind(this);

	handleUpload(file) {
		if (file.target.files && file.target.files) {
			var reader = new FileReader();
			var self = this;
			reader.onload = function (e) {
				$('.fotoUpload').attr('src', e.target.result);
			}
			reader.readAsDataURL(file.target.files[0]);
		}
	}
	handleSaveKontak(callback, scope) {
		this.props.dispatch(addKontak(!scope.props.state.viewadd, callback)); //untuk trigger refres data 
		this.props.getData();
	}
	handleBatal() {
		this.props.dispatch(handleBatal(false))
		this.refs.name.value = '';
		this.refs.address.value = '';
		this.refs.phone.value = '';
		this.refs.email.value = '';
		this.refs.picture.value = '';
	}
	handleAfterUpdate(callback, scope) {
		this.props.getData();
		this.refs.name.value = '';
		this.refs.address.value = '';
		this.refs.phone.value = '';
		this.refs.email.value = '';
		this.refs.picture.value = '';
		this.refs.version.value = '';
	}
	handleUpdate(uid) {
		var api = Const.api + 'api/v1/person/' + uid;
		var _name = (this.refs.name.value != '') ? this.refs.name.value : '';
		var _address = (this.refs.address.value != '') ? this.refs.address.value : '';
		var _phone = (this.refs.phone.value != '') ? this.refs.phone.value : '';
		var _email = (this.refs.email.value != '') ? this.refs.email.value : '';
		var _picture = (this.refs.picture.src != '') ? this.refs.picture.src : '';
		var _version = (this.refs.version.value != '') ? this.refs.version.value : '';
		var _data = JSON.stringify({ name: _name, address: _address, phone: _phone, email: _email, picture: _picture, version: _version });
		wput(this, api, _data, this.handleAfterUpdate);
	}
	handleSave() {
		var _name = (this.refs.name.value != '') ? this.refs.name.value : '';
		var _address = (this.refs.address.value != '') ? this.refs.address.value : '';
		var _phone = (this.refs.phone.value != '') ? this.refs.phone.value : '';
		var _email = (this.refs.email.value != '') ? this.refs.email.value : '';
		var _picture = (this.refs.picture.src != '') ? this.refs.picture.src : '';

		var _data = JSON.stringify({ name: _name, address: _address, phone: _phone, email: _email, picture: _picture });
		var _tempContinue = true;
		var _errorMsg = '';
		if (_name == '') {
			_tempContinue = false;
			_errorMsg += "Nama Masih Kosong";
		} else if (_address == '') {
			_tempContinue = false;
			_errorMsg += "Address Masih Kosong";
		} else if (_phone == '') {
			_tempContinue = false;
			_errorMsg += "Phone Masih Kosong";
		} else if (_email == '') {
			_tempContinue = false;
			_errorMsg += "Email Masih Kosong";
		}
		if (_tempContinue) {
			_errorMsg = "";
			this.props.dispatch(errorMsg(_tempContinue, _errorMsg))
			var api = Const.api + 'api/v1/person';
			wpost(this, api, _data, this.handleSaveKontak);
		} else {
			this.props.dispatch(errorMsg(_tempContinue, _errorMsg))
		}
		this.refs.name.value = '';
		this.refs.address.value = '';
		this.refs.phone.value = '';
		this.refs.email.value = '';
		this.refs.picture.value = '';
	}
	handleToggleAdd() {
		this.props.dispatch(toogleAdd(!this.props.state.viewadd));
		console.log("ngetes togle : ", !this.props.state.viewadd)
	}
	render() {
		var errormsg = [];
		var viewButton = [];
		var renderEdit = [];
		if (this.props.state.mode == 'edit') {
			viewButton = (<button style={{ marginTop: '20px', marginBottom: '15px' }} className="btn btn-primary" onClick={() => this.handleUpdate(this.props.state.dataEdit.id)}><i className="fa fa-save"></i> Update</button>);
			renderEdit = (<div className="col-lg-12 boxadd">
				<div className="col-xs-3">
					<label>Name</label>
					<input className="form-control text-right" defaultValue={this.props.state.dataEdit.name} type="text" ref={"name"} />
				</div>
				<div className="col-xs-3 ">
					<label>Address</label>
					<input className="form-control text-right" defaultValue={this.props.state.dataEdit.address} type="text" ref={"address"} />
				</div>
				<div className="col-xs-3 ">
					<label>Phone</label>
					<input className="form-control text-right" defaultValue={this.props.state.dataEdit.phone} type="text" ref={"phone"} />
				</div>
				<div className="col-xs-3 ">
					<label>Email</label>
					<input className="form-control text-right" defaultValue={this.props.state.dataEdit.email} type="text" ref={"email"} />
				</div>
				<div className="col-xs-3 syle={{paddingTop:'20px'}}">
					<label>Picture</label>
					<input className="text-right" defaultValue={""} type="file" onChange={(file) => this.handleUpload(file)} ref={"picture"} />
					<img className="fotoUpload" ></img>
				</div>
			</div>
			)
		} else {
			viewButton = (<button style={{ marginTop: '20px', marginBottom: '15px' }} className="btn btn-primary" onClick={() => this.handleSave()}><i className="fa fa-save"></i> Save</button>);
			renderEdit = (<div className="col-lg-12 boxadd">
				<div className="col-xs-3">
					<label>Name</label>
					<input className="form-control text-right" type="text" ref={"name"} />
				</div>
				<div className="col-xs-3 ">
					<label>Address</label>
					<input className="form-control text-right" type="text" ref={"address"} />
				</div>
				<div className="col-xs-3 ">
					<label>Phone</label>
					<input className="form-control text-right" type="text" ref={"phone"} />
				</div>
				<div className="col-xs-3 ">
					<label>Email</label>
					<input className="form-control text-right" type="text" ref={"email"} />
				</div>
				<div className="col-xs-3 syle={{paddingTop:'20px'}}">
					<label>Picture</label>
					<img className="fotoUpload" ></img>
				</div>
			</div>
			)
		}
		if (this.props.state.error) {
			errormsg = (<div className="col-lg-12 col-xs-12 alert alert-danger">{this.props.state.errormsg}</div>)
		}
		if (this.props.state.viewadd) {
			return (<div>
				{renderEdit}
				<div className="col-lg-12">
					<div className="col-lg-12 text-right">
						<button style={{ marginTop: '20px', marginRight: '20px', marginBottom: '15px' }} className="btn btn-danger" onClick={() => this.handleBatal()}><i className="fa fa-save"></i> Batal </button>
						{viewButton}
					</div>
				</div>
				<div className="col-lg-12 col-md-12 col-xs-12">
					{errormsg}
				</div>
			</div>
			);
		} else {
			return (
				<div className="col-lg-12">
					<div className="col-lg-12 text-right">
						<button style={{ marginTop: '20px', marginBottom: '15px' }} className="btn btn-primary" onClick={() => this.handleToggleAdd()}><i className="fa fa-plus"></i> Add</button>
					</div>
				</div>
			)
		}
	}
}
module.exports = connect(mapStateToProps)(FormAddView);