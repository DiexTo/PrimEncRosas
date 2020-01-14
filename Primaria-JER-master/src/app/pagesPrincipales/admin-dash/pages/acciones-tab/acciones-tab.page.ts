import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-acciones-tab',
  templateUrl: './acciones-tab.page.html',
  styleUrls: ['./acciones-tab.page.scss'],
})
export class AccionesTabPage implements OnInit {

  fecha:String='';
  constructor() {

this.fecha= this.getFecha();
   }

  ngOnInit() {

  }

  ionViewDidLoad(){
   this.fecha=this.getFecha();
  }


  toggle:boolean=false;

  toggle2:boolean=false;

  getFecha(){
    return new Date().toISOString();
  }

}
