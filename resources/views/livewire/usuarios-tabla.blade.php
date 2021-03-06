<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

           
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Usuario
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Pais
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Estado
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Genero
                </th>
                
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $user)
              <tr>
                <td class="px-6 py-4 ">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{ $user -> name }}
                      </div>
                      <div class="text-sm text-gray-500">
                        {{ $user -> email }}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 ">
                  <div class="text-sm text-gray-900"> {{ $user -> pais }}</div>
                 
                </td>
                <td class="px-6 py-4 ">
                    <div class="text-sm text-gray-900"> {{ $user -> estado }}</div>
                </td>
                <td class="px-6 py-4  text-sm text-gray-500">
                    <div class="text-sm text-gray-900"> {{ $user -> genero }}</div>

                </td>
               
              </tr>
              @endforeach
              <!-- More people... -->
            </tbody>
          </table>
          {{$users->links()}}
        </div>
      </div>
    </div>
  </div>
  
</div>
