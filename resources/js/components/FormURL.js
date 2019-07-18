import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios, { post } from 'axios';
 

export default class FormURL extends Component {

    constructor(props) {
        super(props);
        this.state = {
            image: ''
        }    
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        this.fileUpload = this.fileUpload.bind(this);
    }
    
    handleChange(e) {
        console.log(e);
        let files = e.target.files || e.dataTransfer.files;
        if (!files.length)
                return;
        this.createImage(files[0]);
        this.fileUpload(this.state.image);
        event.preventDefault();
    }
    
    handleSubmit(event) {
        alert('A name was submitted: ');
        event.preventDefault();
    }

    createImage(file) {
        let reader = new FileReader();
        reader.onload = (e) => {
          this.setState({
            image: e.target.result
          })
        };
        reader.readAsDataURL(file);
    }

    fileUpload(image){
        const url = 'http://localhost:8001/api/uploadFile';
        const formData = {file: this.state.image};

        let axiosConfig = {
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            withCredentials: false
            
          };

          axios.post(url,formData, axiosConfig)
                .then(response => console.log(response))
                .catch((err) => {
                    console.log("AXIOS ERROR: ", err);
                  })
    }
    
    
    render() {
        return (
            <form id="formURL" encType="multipar/form-data">
                <div className="form-group">
                    <label htmlFor="archivo">Archivo</label>
                    <input onChange={this.handleChange}  type="file" className="form-control" name="archivo" />
                </div>
                <div className="form-group">
                    <label className="form-check-label">Seleccione los campos a enviar</label>                   
                </div>
                <div className="form-group form-check">
                    <input className="form-check-input" type="checkbox" value="" name="campo-1" />
                    <label className="form-check-label" htmlFor="defaultCheck1">Opción1</label>                   
                </div>
                <div className="form-group">
                    <label htmlFor="landing">Landing</label>
                    <input type="text" className="form-control" name="landing" placeholder="Ingrese la landing"/>
                </div> 
                <div className="form-group">
                    <label htmlFor="mensaje">Mensaje - Ingrese (url) donde requiera la landing </label>
                    <textarea className="form-control" name="mensaje" rows="3" maxLength="167"></textarea>
                </div>
                <span id="respuesta"></span>
            </form>
            
        )
    }
}

if (document.getElementById('formUrl')) {
    ReactDOM.render(<FormURL />, document.getElementById('formUrl'));
}
