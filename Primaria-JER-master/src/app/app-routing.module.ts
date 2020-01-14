import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';


import { AdminGuard } from './guards/admin.guard';
import { PadreGuard } from './guards/padre.guard';
import { DirectorGuard } from './guards/director.guard';

const routes: Routes = [
  { path: '', redirectTo: 'inicio', pathMatch: 'full' },
  
  {
    path: 'inicio',
    loadChildren: () => import('./pagesPrincipales/inicio/inicio.module').then( m => m.InicioPageModule)
  },
  {
    path: 'padres-dash',
    loadChildren: () => import('./pagesPrincipales/padres-dash/padres-dash.module').then( m => m.PadresDashPageModule),
    canLoad:[PadreGuard]
  },
  { //admin-dash
    path: 'profe-dash',
    loadChildren: () => import('./pagesPrincipales/admin-dash/admin-dash.module').then( m => m.AdminDashPageModule),
    canLoad:[AdminGuard]
  },
  {
    path: 'director-dash',
    loadChildren: () => import('./pagesPrincipales/director-dash/director-dash.module').then( m => m.DirectorDashPageModule),
    canLoad:[DirectorGuard]
  }
  
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
