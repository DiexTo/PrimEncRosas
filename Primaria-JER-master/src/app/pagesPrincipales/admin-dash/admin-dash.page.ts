import { AuthService } from './../../services/auth.service';
import { Component, OnInit } from '@angular/core';
import { Router, RouterEvent } from '@angular/router';

@Component({
  selector: 'app-admin-dash',
  templateUrl: './admin-dash.page.html',
  styleUrls: ['./admin-dash.page.scss'],
})
export class AdminDashPage implements OnInit {

  constructor( public router: Router,
    public authService: AuthService) {

    //Para ver los cambios de las rutas
    this.router.events.subscribe( ( event: RouterEvent) =>{
      if(event && event.url){
        this.selectedPath= event.url;
      }
    });
   }

  ngOnInit() {

  }

  //Ver en que path esta
  selectedPath='';


  //Verificar que tengan los /
  menuAdmin=[
    {
      title:'Dashboard',
      url:'/profe-dash/tabs/acciones',
      icon:'keypad'
    },
    {
      title:'Anuncio',
      url:'/profe-dash/anuncio-menu',
      icon:'paper-plane'
    }
  ];


  cerrarSesion(){
    this.authService.cerrarSesion();
  }

}
