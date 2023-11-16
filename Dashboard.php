<title>Table in admin dashboard</title>
<div class="container-fluid">
  <style>
    input[type="checkbox"] {
      /* Double-sized Checkboxes */
      -ms-transform: scale(1.5); /* IE */
      -moz-transform: scale(1.5); /* FF */
      -webkit-transform: scale(1.5); /* Safari and Chrome */
      -o-transform: scale(1.5); /* Opera */
      transform: scale(1.5);
      padding: 10px;
    }
  </style>
  <div class="col-lg-12">
    <div class="row mb-4 mt-4">
      <div class="col-md-12"></div>
    </div>
    <div class="row">
      <!-- FORM Panel -->
      <!-- Table Panel -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <b>Jobs List</b>
            <span class="">
              <button
                class="btn btn-primary btn-block btn-sm col-sm-2 float-right"
                type="button"
                id="new_career"
              >
                <i class="fa fa-plus"></i> New
              </button>
            </span>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-condensed table-hover">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="">Company</th>
                  <th class="">Job Title</th>
                  <th class="">Posted By</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center"></td>
                  <td class="">
                    <p><b> </b></p>
                  </td>
                  <td class="">
                    <p><b></b></p>
                  </td>
                  <td class="">
                    <p><b></b></p>
                  </td>
                  <td class="text-center">
                    <button
                      class="btn btn-sm btn-outline-primary view_career"
                      type="button"
                      data-id=""
                    >
                      View
                    </button>
                    <button
                      class="btn btn-sm btn-outline-primary edit_career"
                      type="button"
                      data-id=""
                    >
                      Edit
                    </button>
                    <button
                      class="btn btn-sm btn-outline-danger delete_career"
                      type="button"
                      data-id=""
                    >
                      Delete
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Table Panel -->
    </div>
  </div>
</div>