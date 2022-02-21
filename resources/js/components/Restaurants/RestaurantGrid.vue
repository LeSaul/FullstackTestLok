<template>
  <div class="container-fluid">
    <DxDataGrid :data-source="dataSource">
        <DxFilterRow
        :visible="true"
      />
      <DxHeaderFilter
        :visible="true"
      />
      <DxColumn caption="ID" data-field="id"/>
      <DxColumn caption="Nombre" data-field="name" />
      <DxColumn caption="Site" data-field="contact.site" />
      <DxColumn caption="Email" data-field="contact.email" />
      <DxColumn caption="Tel." data-field="contact.phone" />
      <DxColumn caption="Calle" data-field="address.street" />
      <DxColumn caption="Ciudad" data-field="address.city" />
      <DxColumn caption="Estado" data-field="address.state" />
      <DxColumn caption="LatLng" data-field="address.location" cell-template="locationTemplate" />
      <DxColumn caption="Rating" data-field="ratings" :calculate-cell-value="rateAverage" />
        <template #locationTemplate="{data}">
            <LocationTemplate :location="data.value" />
        </template>
        <DxPaging :page-size="10" />
    </DxDataGrid>
  </div>
</template>

<script>
import { DxDataGrid, DxColumn, DxPaging, DxFilterRow, DxHeaderFilter } from "devextreme-vue/data-grid";
import LocationTemplate from '../includes/locationTemplate.vue';

export default {
  components: {
    DxDataGrid,
    DxColumn,
    DxPaging,
    DxFilterRow,
    DxHeaderFilter,
    LocationTemplate
  },
  props: ["restaurants"],
  data() {
    return {
      dataSource: [],
    };
  },
  mounted() {
    this.dataSource = this.restaurants;
  },
  methods:{
      rateAverage(data){
         let rates = data.ratings.map(e => e.rate);
         let rate = rates.reduce( (total, next) => total + next )
        return parseFloat(rate / rates.length).toFixed(2);
      }
  }
};
</script>

<style>
</style>