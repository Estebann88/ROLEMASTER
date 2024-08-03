// Simulación de datos de permisos
let permissionsData = [
    { id: 1, name: "Permiso 1", description: "Descripción del Permiso 1", modifiedDate: "2024-07-03" },
    { id: 2, name: "Permiso 2", description: "Descripción del Permiso 2", modifiedDate: "2024-07-03" },
    { id: 3, name: "Permiso 3", description: "Descripción del Permiso 3", modifiedDate: "2024-07-03" }
  ];
  
  // Función para cargar los permisos en la tabla
  function loadPermissions() {
    const permissionsTableBody = document.getElementById("permissionsTableBody");
    permissionsTableBody.innerHTML = "";
  
    permissionsData.forEach(permission => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${permission.id}</td>
        <td>${permission.name}</td>
        <td>${permission.description}</td>
        <td>${permission.modifiedDate}</td>
        <td>
          <button type="button" class="btn btn-sm btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#permissionModal" data-permission-id="${permission.id}">Editar</button>
          <button type="button" class="btn btn-sm btn-danger btn-delete" data-permission-id="${permission.id}">Eliminar</button>
        </td>
      `;
      permissionsTableBody.appendChild(row);
    });
  }
  
  // Función para añadir o editar un permiso
  function addOrEditPermission(name, description, id = null) {
    const modifiedDate = new Date().toLocaleDateString();
    if (id) {
      // Editar permiso existente
      const index = permissionsData.findIndex(permission => permission.id === id);
      if (index !== -1) {
        permissionsData[index].name = name;
        permissionsData[index].description = description;
        permissionsData[index].modifiedDate = modifiedDate;
      }
    } else {
      // Añadir nuevo permiso
      const newId = permissionsData.length + 1;
      permissionsData.push({ id: newId, name, description, modifiedDate });
    }
    loadPermissions();
  }
  
  // Función para eliminar un permiso
  function deletePermission(id) {
    permissionsData = permissionsData.filter(permission => permission.id !== id);
    loadPermissions();
  }
  
  // Event listener para el formulario de añadir/editar permiso
  document.getElementById("permissionForm").addEventListener("submit", function(event) {
    event.preventDefault();
    const permissionName = document.getElementById("permissionName").value;
    const permissionDescription = document.getElementById("permissionDescription").value;
    const permissionId = document.getElementById("permissionId").value;
  
    addOrEditPermission(permissionName, permissionDescription, permissionId);
    document.getElementById("permissionForm").reset();
    $('#permissionModal').modal('hide'); // Cerrar modal después de guardar
  });
  
  // Event listener para botones de editar permiso (abrir modal con datos para editar)
  document.getElementById("permissionsTableBody").addEventListener("click", function(event) {
    if (event.target.classList.contains("btn-edit")) {
      const permissionId = parseInt(event.target.getAttribute("data-permission-id"));
      const permission = permissionsData.find(permission => permission.id === permissionId);
      if (permission) {
        document.getElementById("permissionName").value = permission.name;
        document.getElementById("permissionDescription").value = permission.description;
        document.getElementById("permissionId").value = permissionId;
      }
    }
  });
  
  // Event listener para botones de eliminar permiso
  document.getElementById("permissionsTableBody").addEventListener("click", function(event) {
    if (event.target.classList.contains("btn-delete")) {
      const permissionId = parseInt(event.target.getAttribute("data-permission-id"));
      if (confirm(`¿Estás seguro de eliminar el permiso con ID ${permissionId}?`)) {
        deletePermission(permissionId);
      }
    }
  });
  
  // Cargar permisos al iniciar la página
  document.addEventListener("DOMContentLoaded", function() {
    loadPermissions();
  });
  