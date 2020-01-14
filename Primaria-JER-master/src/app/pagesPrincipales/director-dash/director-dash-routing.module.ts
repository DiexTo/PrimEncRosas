import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { DirectorDashPage } from './director-dash.page';

const routes: Routes = [
  {
    path: '',
    component: DirectorDashPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class DirectorDashPageRoutingModule {}
