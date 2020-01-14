import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { PadresDashPageRoutingModule } from './padres-dash-routing.module';

import { PadresDashPage } from './padres-dash.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    PadresDashPageRoutingModule
  ],
  declarations: [PadresDashPage]
})
export class PadresDashPageModule {}
