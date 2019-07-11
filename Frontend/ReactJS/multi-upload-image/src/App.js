import React, { Component } from 'react';
import PropTypes from 'prop-types';
import FlipMove from 'react-flip-move';
import './index.css';


let styles = {
  display: "flex",
  alignItems: "center",
  justifyContent: "center",
  flexWrap: "wrap",
  backgroundColor: "blue",
  margin: "20px auto",
  maxWidth: "500px",
  color: "red"
};

class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      pictures: [],
      files: []
    };

    this.inputElement = '';
    this.onDrop = this.onDrop.bind(this);
    this.triggerFileUpload = this.triggerFileUpload.bind(this);
  }

  // btn trigger input file to open
  triggerFileUpload() {
    this.inputElement.click();
  }

  // hendle file validasi
  onDrop(e) {
    const files = e.target.files;
    const _this = this;

    //iterasi semua file yg di unggah
    for (let i = 0; i < files.lengt; i++) {
      let f = files[i];

      const reader = new FileReader();
      reader.onload = (function () {
        return function (e) {

          //tambahkan nama file ke variabel dataURL
          let dataURL = e.target.result;
          dataURL = dataURL.replace(";base64", `;name=${f.name};base64`);

          if (_this.props.singleImage === true) {
            _this.setState({ pictures: [dataURL], files: [f] }, () => {
              _this.props.onChange()(_this.state.files, _this.state.pictures);
            });
          } else if (_this.state.pictures.indexOf(dataURL) === -1) {
            const newArray = _this.state.pictures.slice();
            newArray.push(dataURL);

            const newFiles = _this.state.files.slice();
            newFiles.push(f);

            _this.setState({ pictures: newArray, files: newFiles }, () => {
              _this.props.onChange(_this.state.files, _this.state.pictures);
            });
          }
        }
      })(f);
      reader.readAsDataURL(f);
    }
  }

  removeImage(picture) {
    const removeIndex = this.state.pictures.findIndex(e => e === picture);
    const filteredPictures = this.state.pictures.filter((e, index) => index !== removeIndex);
    const filteredFiles = this.state.files.filter((e, index) => index !== removeIndex);
    this.setState({ pictures: filteredPictures, files: filteredFiles }, () => {
      this.props.onChange(this.state.files, this.state.pictures);
    });
  }

  renderPreview() {
    return (
      <div className="uploadPicturesWrapper">
        <FlipMove enterAnimation="fade" leaveAnimation="fade" style={styles}>
          {this.renderPreviewPictures()}
        </FlipMove>
      </div>
    );
  }

  renderPreviewPictures() {
    return this.state.pictures.map((picture, index) => {
      return (
        <div key={index} className="uploadPictureContainer">
          <div className="deleteImage" onClick={() => this.removeImage(picture)}>X</div>
          <img src={picture} className="uploadPicture" alt="preview" />
        </div>
      );
    });
  }


  render() {
    return (
      <div className={"fileUploader " + this.props.className} style={this.props.style}>
        <div className="fileContainer">
          <div className="errorsContainer">
            
          </div>
          <button
            type={this.props.buttonType}
            className={"chooseFileButton " + this.props.buttonClassName}
            style={this.props.buttonStyles}
            onClick={this.triggerFileUpload}
          >
            {this.props.buttonText}
          </button>
          <input
            type="file"
            ref={input => this.inputElement = input}
            name={this.props.name}
            multiple="multiple"
            onChange={this.onDropFile}
            accept={this.props.accept}
          />
          { this.props.withPreview ? this.renderPreview() : null }
        </div>
      </div>
    )
  }
}
ReactImageUploadComponent.defaultProps = {
	className: '',
	buttonClassName: "",
	buttonStyles: {},
	withPreview: false,
	accept: "image/*",
	name: "",
	withIcon: true,
	buttonText: "Choose images",
    buttonType: "submit",
	withLabel: true,
	label: "Max file size: 5mb, accepted: jpg|gif|png",
	labelStyles: {},
	labelClass: "",
	imgExtension: ['.jpg', '.gif', '.png'],
	maxFileSize: 5242880,
	fileSizeError: " file size is too big",
	fileTypeError: " is not a supported file extension",
	errorClass: "",
	style: {},
	errorStyle: {},
	singleImage: false,
    onChange: () => {}
};

ReactImageUploadComponent.propTypes = {
	style: PropTypes.object,
	className: PropTypes.string,
	onChange: PropTypes.func,
  onDelete: PropTypes.func,
	buttonClassName: PropTypes.string,
	buttonStyles: PropTypes.object,
    buttonType: PropTypes.string,
	withPreview: PropTypes.bool,
	accept: PropTypes.string,
	name: PropTypes.string,
	withIcon: PropTypes.bool,
	buttonText: PropTypes.string,
	withLabel: PropTypes.bool,
	label: PropTypes.string,
	labelStyles: PropTypes.object,
	labelClass: PropTypes.string,
	imgExtension: PropTypes.array,
	maxFileSize: PropTypes.number,
	fileSizeError: PropTypes.string,
	fileTypeError: PropTypes.string,
	errorClass: PropTypes.string,
	errorStyle: PropTypes.object,
  singleImage: PropTypes.bool
};

export default App;
