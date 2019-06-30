@extends ('principal')
@section ('contenido')
<template v-if="menu==0">
    <principal-component></principal-component>
</template>

<template v-if="menu==1">
    <h3>Contenido del Menú 1</h3>
  
    <example-component></example-component>
  
</template>
<template v-if="menu==2">
    <h3>Contenido del Menú 2</h3>
</template>
<template v-if="menu==3">
    <h3>Contenido del Menú 3</h3>
</template>
<template v-if="menu==4">
    <h3>Contenido del Menú 4</h3>
</template>
<template v-if="menu==5">
    <h3>Contenido del Menú 5</h3>
</template>
<template v-if="menu==6">
    <h3>Contenido del Menú 6</h3>
</template>
<template v-if="menu==7">
    <h3>Contenido del Menú 7</h3>
</template>
<template v-if="menu==8">
    <h3>Contenido del Menú 8</h3>
</template>
<template v-if="menu==9">
    <h3>Contenido del Menú 9</h3>
</template>
<template v-if="menu==10">
    <h3>Contenido del Menú 10</h3>
</template>
<template v-if="menu==11">
    <h3>Contenido del Menú 11</h3>
</template>
<template v-if="menu==12">
    <h3>Contenido del Menú 12</h3>
</template>
@endsection