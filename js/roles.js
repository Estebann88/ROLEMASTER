document.addEventListener('DOMContentLoaded', () => {
    const roleTableBody = document.getElementById('roleTableBody');
    const roleForm = document.getElementById('roleForm');
    const roleModalLabel = document.getElementById('roleModalLabel');
    const roleNameInput = document.getElementById('roleName');
    const roleDescriptionInput = document.getElementById('roleDescription');
    let editRoleId = null;
  
    let roles = [
      { id: 1, name: 'Administrador', date: '2024-01-01', description: 'Rol con todos los permisos' },
      { id: 2, name: 'Usuario', date: '2024-01-02', description: 'Rol con permisos limitados' },
    ];
  
    function renderRoles() {
      roleTableBody.innerHTML = '';
      roles.forEach(role => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${role.id}</td>
          <td>${role.name}</td>
          <td>${role.date}</td>
          <td>
            <button class="btn btn-info btn-sm" onclick="editRole(${role.id})">Editar</button>
            <button class="btn btn-danger btn-sm" onclick="deleteRole(${role.id})">Borrar</button>
            <button class="btn btn-secondary btn-sm" onclick="viewDescription('${role.description}')">...</button>
          </td>
        `;
        roleTableBody.appendChild(tr);
      });
    }
  
    window.editRole = function (id) {
      const role = roles.find(r => r.id === id);
      if (role) {
        editRoleId = id;
        roleModalLabel.textContent = 'Editar Rol';
        roleNameInput.value = role.name;
        roleDescriptionInput.value = role.description;
        const roleModal = new bootstrap.Modal(document.getElementById('roleModal'));
        roleModal.show();
      }
    }
  
    window.deleteRole = function (id) {
      roles = roles.filter(role => role.id !== id);
      renderRoles();
    }
  
    window.viewDescription = function (description) {
      alert(description);
    }
  
    roleForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = roleNameInput.value;
      const description = roleDescriptionInput.value;
      const date = new Date().toISOString().split('T')[0];
  
      if (editRoleId) {
        const role = roles.find(r => r.id === editRoleId);
        role.name = name;
        role.description = description;
        role.date = date;
      } else {
        const newRole = { id: roles.length + 1, name, date, description };
        roles.push(newRole);
      }
  
      renderRoles();
      const roleModal = bootstrap.Modal.getInstance(document.getElementById('roleModal'));
      roleModal.hide();
      roleForm.reset();
      roleModalLabel.textContent = 'Añadir Rol';
      editRoleId = null;
    });
  
    renderRoles();
  });
  