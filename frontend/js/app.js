document.addEventListener("DOMContentLoaded", () => {
  console.log("JavaScript cargado");
  obtenerPacientes();
});

function obtenerPacientes() {
  fetch("http://localhost/sistema_pacientes/backend/routes/PacienteRoute.php")
    .then(response => response.json())
    .then(data => {
      console.log("Pacientes:", data);
      renderizarPacientes(data);
    })
    .catch(error => console.error("Error en fetch:", error));
}

function renderizarPacientes(pacientes) {
  const tbody = document.getElementById("tablaPacientes");
  tbody.innerHTML = "";

  pacientes.forEach(p => {
    const fila = `
      <tr>
        <td>${p.id}</td>
        <td>${p.tipo_documento_id}</td>
        <td>${p.nombre1} ${p.nombre2 || ''} ${p.apellido1} ${p.apellido2 || ''}</td>
        <td>${p.correo}</td>
        <td>
        <button class="btn btn-info btn-sm" title="Ver">
          <i class="fas fa-eye"></i>
        </button>
        <button class="btn btn-warning btn-sm" title="Editar" onclick="editarPaciente(${p.id})">
          <i class="fas fa-edit"></i>
        </button>
        <button class="btn btn-danger btn-sm" title="Eliminar" onclick="eliminarPaciente(${p.id})">
          <i class="fas fa-trash-alt"></i>
        </td>
      </tr>
    `;
    tbody.innerHTML += fila;
  });
}
