// 100x flat 3d tubes are created and stored
// Every tube is animated on it's path
// Process repeated with same tubes again

// Define global variables
let canvas, scene, camera, renderer, controls;

const background = `#${new THREE.Color().setHSL(Math.random(), 0.5, 0.8).getHexString()}`;

/**
                                                                                            *
                                                                                            */
function createEnvironment() {
  // Find canvas in DOM
  canvas = document.querySelector("canvas");

  // Create a new scene
  scene = new THREE.Scene();
  scene.fog = new THREE.Fog(background, 0.0025, 200);

  // Create a new camera
  camera = new THREE.PerspectiveCamera(
  40,
  canvas.clientWidth / canvas.clientHeight,
  0.0001,
  10000);

  camera.position.set(0, 0, 60);
  camera.lookAt(scene.position);

  // Create a new renderer
  renderer = new THREE.WebGLRenderer({
    antialias: true,
    alpha: true,
    canvas });

  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize(canvas.clientWidth, canvas.clientHeight);
  renderer.setClearColor(background);
  renderer.shadowMap.enabled = true;
  renderer.shadowMap.type = THREE.PCFSoftShadowMap;

  // Create controls
  controls = new THREE.OrbitControls(camera, renderer.domElement);
  controls.enableDamping = true;
  controls.dampingFactor = 0.2;
  controls.autoRotate = true;

  // ==================
  const ambientLight = new THREE.AmbientLight("#ffffff", 0.1);
  scene.add(ambientLight);

  const plane = new THREE.Mesh(
  new THREE.PlaneGeometry(1000, 1000),
  new THREE.MeshPhongMaterial({
    emissive: background }));


  plane.receiveShadow = true;
  plane.position.y = -15;
  plane.rotation.x = Math.PI * -0.5;
  scene.add(plane);

  const light = new THREE.SpotLight(0xffffff, 2, 80, Math.PI * 0.25, 1, 2);
  light.position.set(0, 40, 0);
  light.castShadow = true;
  light.shadow.mapSize.width = 1024;
  light.shadow.mapSize.height = 1024;
  light.shadow.camera.near = 0.5;
  light.shadow.camera.far = 31;

  scene.add(light);
}

function g(value) {
  const floor = -value;
  return floor + Math.random() * value * 2;
}

function r() {
  return new THREE.Vector3(g(10), g(10), g(10));
}

function animateLine(i) {
  const mesh = meshes[i];
  const offset = 12;
  var o = { t: -offset };
  anime({
    targets: o,
    t: mesh.geometry.attributes.position.count + offset,
    duration: 4000,
    easing: "easeInOutQuad",
    update: function () {
      let s = o.t.toFixed(0) * 4;
      s = s - s % 12;
      mesh.geometry.setDrawRange(s, s + offset);
    } });

}

/**
   *
   */
function render() {
  renderer.render(scene, camera);
  controls.update();
  requestAnimationFrame(render);
}

// Run everything
createEnvironment();

const meshes = [];
for (let i = 0; i < 100; i += 1) {
  const curve = new THREE.CatmullRomCurve3([r(), r(), r(), r()]);

  const size = 2;
  const geometry = new THREE.TubeBufferGeometry(curve, 400, 0.25, size, false);
  const material = new THREE.MeshPhongMaterial({
    emissive: new THREE.Color().setHSL(Math.random(), 0.6, 0.7),
    flatShading: false });

  const mesh = new THREE.Mesh(geometry, material);
  mesh.castShadow = true;
  mesh.geometry.setDrawRange(0, 2);
  scene.add(mesh);
  meshes.push(mesh);
}

render();

let i = 0;
setInterval(() => {
  animateLine(i);
  i += i === meshes.length - 1 ? -meshes.length + 1 : 1;
  console.log(i);
}, 60);

window.addEventListener(
"resize",
() => {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
},
false);