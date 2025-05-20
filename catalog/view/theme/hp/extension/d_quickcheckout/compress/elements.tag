<qc_address_radio>
    <p class="qc-title">{getLanguage().general.text_address_existing}</p>
    <div class="ve-field" each={address in getSession().addresses } if={address}>
        <label class="ve-radio {(parent.opts.address_id == address.address_id) ? 've-radio--selected':''}" for="{ parent.opts.step }_address_id_{address.address_id}">
        <input
          type="radio"
          class="ve-input"
          id="{ parent.opts.step }_address_id_{address.address_id}"
          name="{ parent.opts.step }[address_id]"
          value={ address.address_id}
          checked={parent.opts.address_id == address.address_id}
          onclick={change}/>
          <i></i>
        <span>{address.firstname} {address.lastname} {address.company} {address.address_1} {address.address_2} {address.city}, {address.zone} {address.postcode} {address.country}</span>
      </label>
    </div>
    <div class="ve-field {(opts.address_id == '0') ? 've-mb-3' : ''}">
        <label class="ve-radio {(opts.address_id == '0') ? 've-radio--selected':''}"  for="{ opts.step }_address_id_0">
        <input
          type="radio"
          class="ve-input"
          id="{ opts.step }_address_id_0"
          name="{ opts.step }[address_id]"
          value="0"
          checked={opts.address_id == '0'}
          onclick={change}/>
          <i></i>
        <span>{getLanguage().general.text_address_new}</span>
      </label>
    </div>
    
    <script>
        this.mixin({store:d_quickcheckout_store});
        change(e){
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }
    </script>
</qc_address_radio>

<qc_address_select>
    <div class="ve-field">
        <label for="{ opts.step }_address_id">
            <input
            type="radio"
            id="{ opts.step }_address_id"
            value=""
            checked={opts.address_id != '0'}
            onclick={switchToAddress}/>
            <span>{getLanguage().general.text_address_existing}</span>
            <select
                class="ve-input address-select"
                onchange={change}
                name="{opts.step }[address_id]">
                <option 
                each={address in getSession().addresses } 
                value={ address.address_id}
                selected={address.address_id == opts.address_id}
                if={address}>
                    {address.firstname} {address.lastname} {address.company} {address.address_1} {address.address_2} {address.city}, {address.zone} {address.postcode} {address.country}
                </option>
            </select>
        </label>
    </div>
    <div class="ve-field {(opts.address_id == '0') ? 've-mb-3' : ''}">
        <label for="{ opts.step }_address_id_0">
            <input
            type="radio"
            id="{ opts.step }_address_id_0"
            name="{ opts.step }[address_id]"
            value="0"
            checked={opts.address_id == '0'}
            onclick={change}/>
            <span>{getLanguage().general.text_address_new}</span>
        </label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;

        change(e){
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }
        switchToAddress(e){
            this.store.dispatch(this.opts.step+'/update', serializeJSON(Array.from(dv_cash(tag.root).find('.address-select'))));
        }
    </script>
</qc_address_select>

<qc_col>
    <virtual if={getState().edit}>
        <qc_setting if={getState().edit} setting_id="{opts.col_id}_setting" title="Blocks">
            <div class="qc-setting-panels">
                <a each={ step, step_id in getState().steps } onclick={parent.parent.addStep} data-name={step}  class="qc-setting-panel add-step">
                    <div class="qc-setting-panel-content">
                        <div class="qc-setting-panel-heading"><img if={getLanguage()[step]} src="{getLanguage()[step]['image']}" /></div>
                        <div class="qc-setting-panel-body"> {getLanguage()[step] &&  getLanguage()[step]['heading_title']  ? getLanguage()[step]['heading_title'] : step }</div>
                    </div>
                </a>
            </div>
        </qc_setting>
        <div class="gr-control gr-col-control">
            <a class="gr-btn gr-add-row" onclick={addSubRow}><i class="fa fa-clone"></i> Add subrow</a> 
            <a class="gr-btn gr-remove-col" onclick={removeCol}><i class="fa fa-times"></i></a>
            <span class="gr-label">COLUMN</span>
        </div>
        <div class="gr-col-border-right"></div>
        <div class="gr-col-border-bottom"></div>
        <div class="gr-col-border-left"></div>
        <div class="gr-col-content ui-sortable">
            <div 
            each={item_id in sortItems(opts.col.children)}
            if={opts.col.children[item_id]}
            id={item_id}
            sort_order={parent.opts.col.children[item_id].sort_order}
            class="{(parent.opts.col.children[item_id].children) ? '' : 'gr-item'}"
            data-name="{parent.opts.col.children[item_id].name}">
                <div if={(parent.opts.col.children[item_id].type == 'item')} data-is={'qc_'+parent.opts.col.children[item_id].name}></div>
                <qc_row if={(parent.opts.col.children[item_id].type != 'item')} 
                    id={item_id}
                    row={parent.opts.col.children[item_id]}
                    row_id={item_id}
                    class="gr">
                </qc_row>
            </div>

            <div 
            if={store.countItems(opts.col.children) < 1}>
                
            </div>
        </div>
        <div class="gr-control gr-col-control">
            <a class="gr-btn gr-add-item gr-btn-block" onclick={showColSettings}><i class="fa fa-plus"></i> Add block</a> 
        </div>
    </virtual>
    <virtual if={!getState().edit}>
        <div 
        each={item_id in sortItems(opts.col.children)}
        if={opts.col.children[item_id]}
        id={item_id}
        data-name="{parent.opts.col.children[item_id].name}">
            <div if={(parent.opts.col.children[item_id].type == 'item')} data-is={'qc_'+parent.opts.col.children[item_id].name}></div>
            <qc_row if={(parent.opts.col.children[item_id].type != 'item')} 
                id={item_id}
                row={parent.opts.col.children[item_id]}
                row_id={item_id}
                class="qc-row gr">
            </qc_row>
        </div>
    </virtual>
    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;
        var state = this.store.getState();

        addStep(e){
            var sort_order = tag.store.countItems(tag.opts.col.children);
            tag.store.dispatch('step/add', { name: dv_cash(e.currentTarget).data('name'), parent: tag.opts.col_id, sort_order: sort_order });
            tag.store.hideSetting();
        }

        showColSettings(){
            if(dv_cash('#'+opts.col_id+'_setting').hasClass('show')){
                tag.store.hideSetting();
                tag.store.updateState(['session', 'col_id'], 0);
            }else{
                tag.store.showSetting(opts.col_id+'_setting');
                tag.store.updateState(['session', 'col_id'], tag.opts.col_id);
            }
        }

        removeCol(){
            var sort_order = tag.store.countItems(tag.parent.opts.row.children);
            tag.store.dispatch('col/remove', {col_id: tag.opts.col_id, sort_order: sort_order});
        }

        addSubRow(){
            var sort_order = tag.store.countItems(tag.opts.col.children);
            tag.store.dispatch('row/add', {parent : tag.opts.col.id, sort_order: sort_order});
        }

        this.step_move_timer = null;
        
        this.on('mount', function(){

            if(getState().edit){
                dv_cash(tag.root).addClass('gr-sortable');
                var items = dv_cash(tag.root).children('.gr-col-content');
                
                d_quickcheckout_sortable(items, {
                    handle: 'div:not(.ui-resizable-handle)',
                    acceptFrom: '.gr-col-content',
                    placeholderClass: 'gr-placeholder'
                }).forEach(item => {
                    item.addEventListener('sortupdate', function (event) {
                        tag.store.dispatch('step/move', {item_id : dv_cash(event.detail.item).attr('id'), col_id: tag.opts.col.id, row_id: tag.opts.col.parent});
                    });
                });

                var options = {
                    gridRows: 12,
                    cellMin: 2,
                    handles: 'e'
                }

                if(!dv_cash(tag.root).hasClass('gr-resizable')){
                    var $parent = dv_cash(tag.root).parent();
                    var cellWidth = ($parent.width()/options.gridRows);

                    //fix width of hidden div bug
                    if(cellWidth > 0){
                        tag.store.updateState(['cellWidth'], cellWidth);
                    }else{
                        var state = tag.store.getState();
                        cellWidth = state.cellWidth;
                    }
                    var cellMin = cellWidth * options.cellMin;

                    dv_cash(tag.root).addClass('gr-resizable');
                    dv_cash(tag.root).append('<div class="ui-resizable-handle ui-resizable-e"></div>');

                    d_quickcheckout_interact(tag.root).resizable({
                        preserveAspectRatio: false,
                        edges: { left: false, right: true, bottom: false, top: false }
                    })
                    .on('resizemove', function (event) {
                        var target = event.target;

                        // update the element's style
                        
                        var width = Math.round(event.rect.width/cellWidth);

                        dv_cash(target).removeClass (function (index, className) {
                            return (className.match (/(^|\s)qc-col-md-\S+/g) || []).join(' ');
                        });
                        dv_cash(target).addClass('qc-col-md-'+width);
                        dv_cash(target).width('');
                        
                        tag.store.dispatch('col/resize', {item_id : dv_cash(target).prop('id'), width: width, col_id: tag.opts.col_id, row_id: tag.opts.parent});
                    });
                }
            }
        });
        
    </script>
</qc_col>
<qc_custom_field>
    <qc_setting 
        if={getState().edit}
        setting_id={ opts.setting_id }
        title={ opts.title }>
        <div class="ve-editor__setting__content__section">
            
            <div class="ve-field">
                <p if={ parent.locationLimit() } class="ve-alert ve-alert--info">This step allows only { parent.locationLimit() } custom fields to be shown</p>
                <h3 class="ve-h3">Select custom field</h3>
                <div 
                    each={option in getState().custom_fields }
                    class="ve-card add-custom-field"
                    if={option && parent.validateLocation(option.location) }
                    onclick={parent.parent.addCustomField}
                    custom_field_id={option.custom_field_id}>
                    <div class="panel-heading"><i class="fa fa-plus"></i> { option.name } </div>
                    
                </div>
            </div>
            <div class="ve-field">
                <a class="ve-btn ve-btn--primary ve-btn--block" href="{parent.getCustomFieldAdmin()}">Create Custom Field</a>
            </div>
            <yield/>
        </div>
    </qc_setting>

    <button class="ve-btn ve-btn--primary ve-btn--block custom-field-create" onclick={toggleSetting}>Add custom field</button>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;

        var custom_fields = [];
        locationLimit(){
            if(tag.opts.location_account && tag.opts.location_address){
                return false;
            }
            if(tag.opts.location_account){;
                return 'account';
            }
            if(tag.opts.location_address){
                return 'address';
            }
        }

        validateLocation(location){
            if(tag.opts.location_account && location == 'account'){
                return true;
            }
            if(tag.opts.location_address && location == 'address'){
                return true;
            }
            return false
        }

        toggleSetting(e){
            if(dv_cash('#'+ this.opts.setting_id).hasClass('show')){
                tag.store.hideSetting()
            }else{
                tag.store.showSetting(tag.opts.setting_id);
            }

            tag.store.getCustomField();
        }

        close(){
            tag.store.hideSetting();
        }

        addCustomField(e){
            var custom_field_id = dv_cash(e.currentTarget).attr('custom_field_id');
            var step = tag.opts.step;

            tag.store.addCustomField(step, custom_field_id);
            tag.opts.onchange();
            tag.store.initFieldSortable(step);
        }

        editCheckbox(e){
            var checkbox = dv_cash(e.currentTarget).find('input[type=checkbox]');
            checkbox.prop("checked", !checkbox.prop("checked"));
            tag.store.dispatch(tag.opts.step+'/edit', serializeJSON(Array.from(dv_cash(tag.root).find('.field-setting'))));
        }

        this.on('mount', function(){

            dv_cash(this.root).find('.qc-setting').appendTo('body');
        })

        getCustomFieldAdmin(){
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
                vars[key] = value;
            });
            return decodeURIComponent(vars['custom_field']);
        }
    </script>
</qc_custom_field>
<qc_depend_setting>
    <hr/>
    <div>
        <div class="ve-btn ve-btn--danger ve-btn--sm ve-pull-right" onclick={removeDepend} data-depend_id={opts.depend_id}>{getLanguage().general.text_remove}</div>
        <h3>{stripTags(getLanguage()[parent.opts.step][field.text])} ({field.id}) </h3>
    </div>
    <br/>
    <div class="depend-values">
        <div 
            each={depend_value, depend_value_id in opts.depend}
            class="ve-well ve-well--primary">
            <div class="ve-field">
                <label class="ve-label">{getLanguage().general.text_value}</label>
                <div class="ve-input-group">
                    <input 
                    if={ parent.field.type != 'radio' && parent.field.type != 'select' && parent.field.type != 'checkbox'}
                    onchange="{editDependOptions}" 
                    type="text" 
                    class="ve-input" 
                    name="config[{getAccount()}][{parent.opts.step}][fields][{ parent.opts.field_id }][depends][{parent.opts.depend_id}][{depend_value_id}][value]" 
                    value={ depend_value.value } />

                    <select
                        if={parent.field.type== 'radio' || parent.field.type == 'select'}
                        name="config[{getAccount()}][{parent.opts.step}][fields][{ parent.opts.field_id }][depends][{parent.opts.depend_id}][{depend_value_id}][value]"
                        class="ve-input"
                        onchange={editDependOptions}>
                        <option value="">{getLanguage().general.text_select}</option>
                        <option
                            each={option in parent.getField().options }
                            if={option}
                            value={ option.value }
                            selected={ option.value == parent.depend_value.value} >
                            { option.name }
                        </option>
                    </select>

                    <select
                        if={parent.field.type == 'checkbox'}
                        name="config[{getAccount()}][{parent.opts.step}][fields][{ parent.opts.field_id }][depends][{parent.opts.depend_id}][{depend_value_id}][value]"
                        class="ve-input"
                        onchange={editDependOptions}>
                        <option value="0" selected={ depend_value.value == 0}>{getLanguage().general.text_not_checked}</option>
                        <option value="1" selected={ depend_value.value == 1}>{getLanguage().general.text_checked}</option>
                        
                    </select>
                    <div class="ve-btn ve-btn--danger" onclick={parent.removeDependValue} data-depend_id={parent.opts.depend_id}  data-depend_value_id={depend_value_id}><i class="fa fa-times"></i></div>
                </div>
            </div>
                
            <div class="row">
                <div class="ve-field col-md-6">
                    <label class="ve-label">{getLanguage().general.text_display}</label>
                    <div>
                        <qc_switcher onclick="{editDependOptions}" name="config[{getAccount()}][{parent.opts.step}][fields][{ parent.opts.field_id }][depends][{parent.opts.depend_id}][{depend_value_id}][display]" data-label-text="Enabled" value="{ depend_value.display }" />
                    </div>
                </div>

                <div class="ve-field col-md-6">
                    <label class="ve-label">{getLanguage().general.text_require}</label>
                    <div>
                        <qc_switcher onclick="{editDependOptions}" name="config[{getAccount()}][{parent.opts.step}][fields][{ parent.opts.field_id }][depends][{parent.opts.depend_id}][{depend_value_id}][require]" data-label-text="Enabled" value="{ depend_value.require }" />
                    </div>
                </div>
            </div>
        </div>
        <div class="ve-btn ve-btn--primary ve-btn--block ve-btn--sm" onclick={addDependValue} data-depend_id={opts.depend_id}>{getLanguage().general.text_add}</div>
        
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;

        getField(){
            return this.store.getConfig()[tag.opts.step].fields[tag.opts.depend_id];
        }

        tag.field = this.getField();

        editDependOptions(e){
            var data = (serializeJSON(e.currentTarget));
            if (!Object.keys(data).length) {
                data = (serializeJSON(Array.from(dv_cash(e.currentTarget).find('input'))));
            }
            var state = getState();
            accounts = ['guest', 'register', 'logged'];
            var depend_data = data.config[getAccount()];
            accounts.forEach(function(account, key, accounts) {
                if (state.config[account][opts.step].fields[opts.field_id]) {
                    if (!data.config[account]) {
                        data.config[account] = {};
                    }
                    data.config[account] = depend_data;
                }
            });
            this.store.dispatch(this.opts.step+'/edit', data);
        }

        removeDepend(e){
            var depend_id = dv_cash(e.currentTarget).data('depend_id');
            tag.store.dispatch('field/removeDepend', {step_id : tag.opts.step, field_id: tag.opts.field_id , depend_id: depend_id } );
        }

        addDependValue(e){
            var depend_id = dv_cash(e.currentTarget).data('depend_id');
            tag.store.dispatch('field/addDependValue', {
                step_id : tag.opts.step, 
                field_id: tag.opts.field_id, 
                depend_id: depend_id 
            } );
        }

        removeDependValue(e){
            var depend_id = dv_cash(e.currentTarget).data('depend_id');
            var depend_value_id = dv_cash(e.currentTarget).data('depend_value_id');
            tag.store.dispatch('field/removeDependValue', {
                step_id : tag.opts.step, 
                field_id: tag.opts.field_id, 
                depend_id: depend_id,
                depend_value_id: depend_value_id
            } );
        }

        
    </script>
</qc_depend_setting>
<qc_depends>
    <div class="ve-input-group">
        <select class="ve-input depend-id" >
            <option
            each={field in getConfig()[opts.step].fields}
            value={field.id}
            >{stripTags(getLanguage()[parent.opts.step][field.text])}</option>
        </select>
        <a class="ve-btn ve-btn--primary" onclick={addDepend}>{getLanguage().general.text_add}</a>
    </div>
    <div each={depend, depend_id in opts.depends }>
        <qc_depend_setting 
            depend_id={depend_id} 
            if={depend}
            depend={depend} 
            field_id={ parent.opts.field_id } 
            step={parent.opts.step} 
            edit="{parent.opts.edit}"></qc_depend_setting>
    </div>
    
    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;

        addDepend(e){
            var depend_id = dv_cash(tag.root).find('.depend-id').val();
            tag.store.dispatch('field/addDepend', {'step_id': tag.opts.step, 'field_id': tag.opts.field_id, 'depend_id': depend_id});
        }
    </script>
</qc_depends>
<qc_design_setting>
    <p>Comming soon</p>
</qc_design_setting>
<qc_error_setting>
    <hr/>
    <div class="ve-well ve-well--danger">
            <a class="ve-btn ve-btn--danger ve-btn--sm ve-pull-right" onclick={removeError} >{getLanguage().general.text_remove}</a>
   
        
        <virtual each={value, condition in opts.error}>
            <div  if={condition != 'text'}   class="ve-field">
                <h3 class="ve-h3">{getLanguage().general['text_'+condition]}</h3>
            </div>

            <div if={condition == 'text'}  class="ve-field">
                <label class="ve-label">{getLanguage().general['entry_text']}</label>
                <input onchange="{parent.opts.edit}" type="text" class="ve-input" name="language[{parent.parent.opts.step}][{value}]" value={ getLanguage()[parent.opts.step][value] } />

                <input type="hidden" class="ve-input" name="config[{getAccount()}][{parent.opts.step}][fields][{parent.opts.field_id }][errors][{parent.opts.error_id}][text]" value={ value } />
            </div>

            <div if={condition == 'min_length'} class="ve-field">
                <label class="ve-label">{getLanguage().general['entry_min_length']}</label>
                <input onchange="{parent.opts.edit}" type="text" class="ve-input" name="config[{getAccount()}][{parent.opts.step}][fields][{parent.opts.field_id }][errors][{parent.opts.error_id}][min_length]" value={ value } />
            </div>

            <div if={condition == 'max_length'} class="ve-field">
                <label class="ve-label">{getLanguage().general['entry_max_length']}</label>
                <input onchange="{parent.opts.edit}" type="text" class="ve-input" name="config[{getAccount()}][{parent.opts.step}][fields][{parent.opts.field_id }][errors][{parent.opts.error_id}][max_length]" value={ value } />
            </div>

            <div if={condition == 'compare_to'} class="ve-field">
                <label class="ve-label">{getLanguage().general['entry_compare_to']}</label>
                <select onchange="{parent.opts.edit}" type="text" class="ve-input" name="config[{getAccount()}][{parent.opts.step}][fields][{parent.opts.field_id }][errors][{parent.opts.error_id}][compare_to]" value={ value } >
                    <option>{ getLanguage().general.text_select }</option>
                    <option
                        each={field in getConfig().payment_address.fields}
                        value="{parent.parent.opts.step}.{field.id}"
                        selected={(value == parent.parent.opts.step+"."+field.id)}
                        >{stripTags(getLanguage()[parent.parent.opts.step][field.text])} ({getLanguage().payment_address.heading_title})</option>
                    <option
                        each={field in getConfig().shipping_address.fields}
                        value="{parent.parent.opts.step}.{field.id}"
                        selected={(value == parent.parent.opts.step+"."+field.id)}
                        >{stripTags(getLanguage()[parent.parent.opts.step][field.text])} ({getLanguage().shipping_address.heading_title})</option>
                    <option
                        each={field in getConfig().custom.fields}
                        value="{parent.parent.opts.step}.{field.id}"
                        selected={(value == parent.parent.opts.step+"."+field.id)}
                        >{stripTags(getLanguage()[parent.parent.opts.step][field.text])} ({getLanguage().custom.heading_title})</option>
                </select>
            </div>

            <div if={condition == 'not_empty'} class="ve-field">
                <input type="hidden" class="ve-input" name="config[{getAccount()}][{parent.opts.step}][fields][{parent.opts.field_id }][errors][{parent.opts.error_id}][not_empty]" value={ value } />
            </div>
            
            <div if={condition == 'checked'} class="ve-field">
                <input type="hidden" class="ve-input" name="config[{getAccount()}][{parent.opts.step}][fields][{parent.opts.field_id }][errors][{parent.opts.error_id}][checked]" value={ value } />
            </div>

            <div if={condition == 'regex'} class="ve-field">
                <label>{getLanguage().general['entry_regex']}</label>
                <input onchange="{parent.opts.edit}" type="text" class="ve-input" name="config[{getAccount()}][{parent.opts.step}][fields][{parent.opts.field_id }][errors][{parent.opts.error_id}][regex]" value={ value } />
            </div>

            <div if={condition == 'telephone'} class="ve-field">
                <input type="hidden" class="ve-input" name="config[{getAccount()}][{parent.opts.step}][fields][{parent.opts.field_id }][errors][{parent.opts.error_id}][telephone]" value={ value } />
            </div>

            <div if={condition == 'email_exists'}>
                <input type="hidden" class="ve-input" name="config[{getAccount()}][{parent.opts.step}][fields][{parent.opts.field_id }][errors][{parent.opts.error_id}][email_exists]" value={ value } />
            </div>
        </div>
    </virtual>
    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;
        removeError(e){
            var error_id = tag.opts.error_id
            this.store.dispatch('field/removeError', {step_id : this.opts.step, field_id: this.opts.field_id , error_id: error_id } );
        }
    </script>
</qc_error_setting>
<qc_errors>
    <div class="ve-input-group">
        <select class="ve-input error-type" >
            <option
            each={error_type in getState().error_types}
            value={error_type}
            >{getLanguage().general['text_'+error_type]}</option>
        </select>
        <a class="ve-btn ve-btn--primary" onclick={addError}>{getLanguage().general.text_add}</a>
    </div>

    <div each={error, error_id in opts.errors }>
        <qc_error_setting 
            if={error}
            error_id={error_id} 
            error={error} 
            field_id={ parent.opts.field_id } 
            step={parent.opts.step} 
            edit="{parent.opts.edit}"></qc_error_setting>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;
        addError(e){
            var error_type = dv_cash(tag.root).find('.error-type').val();
            this.store.dispatch('field/addError', {'step_id': this.opts.step, 'field_id': this.opts.field_id, 'error_type': error_type});
        }
    </script>
</qc_errors>
<qc_field_setting>
    <form class="qc-field-setting">
        <div class="ve-btn-group ve-btn-group--sm" data-toggle="buttons">
            <label class="ve-btn ve-btn--default handle-sortable" id="{ opts.field_id }">
                <i class="fa fa-arrows"></i>
            </label>
            <a class="ve-btn ve-btn--default " onclick="{toggleSetting}" >
                <i class="fa fa-gear"></i>
            </a>

            <label if={(isEmpty(parent.opts.field.depends))} class="ve-btn ve-btn--default { opts.display == 1 ? 'active' : '' }" onclick="{editCheckbox}">
                <input name="config[{getAccount()}][{opts.step}][fields][{ opts.field_id }][display]" type="hidden"  value="0">
                <input name="config[{getAccount()}][{opts.step}][fields][{ opts.field_id }][display]" type="checkbox" value="1" checked={ (opts.display == 1) }>
                <i class="fa fa-eye"></i>
            </label>

            <yield/>

            <a if={(!isEmpty(parent.opts.field.depends))} class="ve-btn ve-btn--default " onclick="{toggleDependency}" >
                <i class="fa fa-link"></i> {isEmpty(parent.opts.field.depends)}
            </a>

            <label if={opts.delete} class="ve-btn ve-btn--default" onclick="{deleteField}">
                <i class="fa fa-times"></i>
            </label>

        </div>
    </form>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;

        toggleSetting(e){
            if(dv_cash('#'+ this.opts.setting_id).hasClass('show')){
                this.store.hideSetting()
            }else{
                this.store.showSetting(this.opts.setting_id);
            }
        }

        toggleDependency(e){
            if(dv_cash('#'+ this.opts.setting_id).hasClass('show')){
                this.store.hideSetting()
            }else{
                var tab = this.opts.setting_id+'_advanced';
                this.store.showSetting(this.opts.setting_id);
                dv_cash('.qc-tab').removeClass('active');
                dv_cash('a[href="#' + tab + '"]').parent('.qc-tab').addClass('active');
                dv_cash('#'+tab).parents('.qc-setting-tab-content').find('.qc-setting-tab-pane').removeClass('in').removeClass('active').hide();
                dv_cash('#'+tab).addClass('in').addClass('active').show();
            }
        }

        editCheckbox(e){
            var checkbox = dv_cash(e.currentTarget).find('input[type=checkbox]');
            checkbox.prop("checked", !checkbox.prop("checked"));
            this.store.dispatch(this.opts.step+'/edit', serializeJSON(Array.from(dv_cash(tag.root).find('.qc-field-setting'))));
        }

        deleteField(e){
            this.store.deleteCustomField(this.opts.step, this.opts.field_id);
            this.store.hideSetting();
            this.opts.ondelete();
            this.store.initFieldSortable(this.opts.step);
        }
    </script>
</qc_field_setting>
<qc_layout class="ve-editor ve-editor--topmenu">
    <qc_layout_setting if={getState().edit}></qc_layout_setting>

    <div if={getLayout().header_footer != 1} class="qc-logo">
        <img if={getLanguage().general.logo} src="{ getLanguage().general.logo }" title="{ getLanguage().general.name }" alt="{ getLanguage().general.name }" class="img-responsive" />
        <h1 if={!getLanguage().general.logo}>{ getLanguage().general.name }</h1>
    </div>

    <div if={getState().layout.pages}>
        
        <div class="process page-nav ve-clearfix">
            <qc_page_nav 
            each={ page_id, i in page_ids}
            if={ getLayout().pages[page_id] && getLayout().pages[page_id].display && getLayout().pages[page_id].deleted != "1" && (getLayout().pages[page_id].display == '1' || getState().edit) }
            page_id={ getLayout().pages[page_id].id } 
            page={getLayout().pages[page_id]}
            sort_order={getLayout().pages[page_id].sort_order}
            id="page_nav_{page_id}"
            status={ getSession().page_id == page_id ? '1' : (i < parent.getCurrentPageIndex() ) ? '2' : '0'}
            class="{ getSession().page_id == page_id ? 'active' : (i < parent.getCurrentPageIndex() ) ? 'complete' : 'disabled'} process-page page-nav-item" ></qc_page_nav>

            <qc_page_nav_add if={riot.util.tags.selectTags().search('"page_nav_add"') && getState().edit}></qc_page_nav_add>
        </div>

        <div class="pages clearfix">
            <qc_page 
            each={ page_id, i in page_ids }
            no-reorder
            id="{page_id}" 
            page_id="{page_id}" 
            page={getLayout().pages[page_id]}
            class="page { getSession().page_id == page_id ? 'active' : ''}">
                
            </qc_page>
        </div>

    </div>

    <div if={!getState().layout.pages}> 
        <a class="btn btn-default" onclick="{addPage}">{getLanguage().general.text_add_page}</a>

        <ul class="nav nav-tabs page-nav">
            <li class="active"><a class="page-nav-item" data-toggle="tab" href="#page_0">{getLanguage().general.text_page_1}</a></li>
        </ul>

        <qc_page id="page_0" page_id="0" class="tab-pane active page"></qc_page>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this; 

        this.page_ids = this.store.getPageIds();

        getCurrentPageIndex(){
            return this.store.getPageIds().indexOf(getSession().page_id);
        }  


        this.store.hideSpinner();
       
        this.on('updated', function(){
            this.page_ids = this.store.getPageIds();
        })

       
    </script>
</qc_layout>
<qc_layout_setting>
    <link rel="stylesheet" href="{'catalog/view/theme/default/stylesheet/d_quickcheckout/skin/'+getLayout().skin+'/'+getLayout().skin+'.css?'+rand()}">
    
    <qc_setting 
    if={getState().edit} 
    setting_id={setting_id}
    title={getLanguage().general.text_general}>

    <ul class="qc-setting-tabs ve-tab ve-tab--block">
            <li class="qc-tab ve-tab__item active">
                <a href="#{ opts.setting_id }_general" id="{ opts.setting_id }_home_tab" role="tab" data-toggle="tab" aria-controls="{ setting_id }_general" aria-expanded="true">{getLanguage().general.text_general}</a>
            </li>
            <li class="qc-tab ve-tab__item">
                <a href="#{ opts.setting_id }_error" id="{ opts.setting_id }_error_tab" role="tab" data-toggle="tab" aria-controls="{ opts.setting_id }_error" aria-expanded="true">{getLanguage().general.text_css}</a>
            </li>
            <li class="qc-tab ve-tab__item">
                <a href="#{ opts.setting_id }_advanced" id="{ opts.setting_id }_advanced_tab" role="tab" data-toggle="tab" aria-controls="{ opts.setting_id }_advanced" aria-expanded="true">{getLanguage().general.text_script}</a>
            </li>
            <!--  <li class="ve-tab__item">
                <a href="#{ opts.setting_id }_design" id="{ opts.setting_id }_design_tab" role="tab" data-toggle="tab" aria-controls="{ opts.setting_id }_design" aria-expanded="true">{getLanguage().general.text_design}</a>
            </li>  -->
        </ul>
        <div class="qc-setting-tab-content"> 
            <div class="qc-setting-tab-pane in active" role="tabpanel" id="{ opts.setting_id }_general" aria-labelledby="{ opts.setting_id }_general_tab"> 
                <div class="ve-editor__setting__content__section">
                    <div class="ve-field">
                        <label class="ve-label">{getLanguage().general.text_display} {getLanguage().general.text_header_footer}</label>
                        <div>
                            <qc_switcher 
                            onclick="{parent.edit}" 
                            name="layout[header_footer]" 
                            data-label-text="Enabled" 
                            value={ getLayout().header_footer } />
                        </div>
                    </div>

                    <div class="ve-field">
                        <label class="ve-label">{getLanguage().general.text_loading}</label>
                        <div class="ve-input-group">
                            <span class="ve-input-group__addon">
                                <img src="{getLanguage().general.img}">
                            </span>
                            <input onchange="{parent.edit}" type="text" class="ve-input" name="language[general][text_loading]" value={ getLanguage().general.text_loading } />
                        </div>
                    </div>

                    <div class="ve-field">
                        <label class="ve-label"> {getLanguage().general.text_layout}</label><br/>
                        <select
                            class="ve-input"
                            onchange="{parent.changeLayout}" >
                            <option
                                each={layout in getState().layouts }
                                if={layout}
                                value={ layout }
                                selected={ layout == getLayout().codename} >
                                { layout } 
                            </option>
                        </select>
                    </div>

                    <div class="ve-field">
                        <label class="ve-label"> {getLanguage().general.text_skin}</label><br/>
                        <select
                            class="ve-input"
                            onchange="{parent.changeSkin}" >
                            <option
                                each={skin in getState().skins }
                                if={skin}
                                value={ skin }
                                selected={ skin == getLayout().skin} >
                                { skin } 
                            </option>
                        </select>
                    </div>
                </div>
                <hr class="ve-hr">
                <div class="ve-editor__setting__content__section">
                    <div class="ve-field">
                        <label class="ve-label"> {getLanguage().general.text_reset}</label><br/>
                        <a class="ve-btn ve-btn--danger" onclick={parent.resetState}>{getLanguage().general.text_reset}</a>
                    </div>
                </div>
            </div>
            <div class="qc-setting-tab-pane" role="tabpanel" id="{ opts.setting_id }_error" aria-labelledby="{ opts.setting_id }_error_tab">
                <div class="ve-editor__setting__content__section">
                    <label>Input your custom CSS here </label>
                    <textarea name="layout[css]" class="ve-input" rows="10" onchange="{parent.edit}" >{getLayout().css}</textarea>
                </div>
            </div> 

            <div class="qc-setting-tab-pane" role="tabpanel" id="{ opts.setting_id }_advanced" aria-labelledby="{ opts.setting_id }_design_tab">
                <div class="ve-editor__setting__content__section">
                    <label>Input your custom JavaScript here </label>
                    <textarea name="layout[js]" class="ve-input" rows="10" onchange="{parent.edit}" >{getLayout().js}</textarea>
                </div>
            </div>
        </div>
    </qc_setting>

    
    <div class="qc-editor ve-editor__menu" if={getState().edit}>
        <div class="ve-editor__menu__title">
            <h1 class="ve-h1">{getLanguage().general.text_editor_title} {getSession().setting_name}</h1>
        </div>
        <div class="ve-editor__menu__control qc-editor-pro" if={ !getState().pro }>
            <qc_pro_label></qc_pro_label>
        </div>
        <div class="ve-editor__menu__control" if={Object.keys(getState().languages).length  > 1}>
            <div class="ve-btn-group" data-toggle="buttons">
                <label each={language, language_id in getState().languages} class="ve-btn ve-btn--lg ve-btn--primary { getSession().language == language_id ?  'active' : '' }" onclick={changeLanguage}>
                    <input class="ve-input" type="radio" name="language" value="{language_id}" id="{language_id}" autocomplete="off" checked={ getSession().language == language_id }> {language.name}
                </label>
            </div>
        </div>
        <!--  <div class="ve-editor__menu__control" if={Object.keys(getState().settings).length  > 1}>
            <div class="ve-btn-group" data-toggle="buttons">
                <label each={setting, key in getState().settings} class="ve-btn ve-btn--lg ve-btn--primary { getSession().setting_id == setting.setting_id ?  'active' : '' }" onclick={changeStore}>
                    <input class="ve-input" type="radio" name="setting" value="{setting.setting_id}" id="{setting.setting_id}" autocomplete="off" checked={ getSession().setting_id == setting.setting_id }> {setting.name}
                </label>
            </div>
        </div>  -->
        <div class="ve-editor__menu__control">
            <a class="ve-btn ve-btn--lg ve-btn--primary" onclick={toggleSetting}><i class="fa fa-cog"></i></a>
            <a class="ve-btn ve-btn--lg ve-btn--success" onclick={saveState}>{getLanguage().general.text_update}</a>
            <a class="ve-btn ve-btn--lg ve-btn--danger" href="{this.store.getState().close}" target="_parent"><i class="fa fa-times fa-close"></i></a>
        </div>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var state = this.store.getState();
        
        this.setting_id = 'layout_setting';
        this.skin = this.store.getSession().skin;

        toggleSetting(e){
            if(dv_cash('#'+ this.setting_id).hasClass('show')){
                this.store.hideSetting()
            }else{
                this.store.showSetting(this.setting_id);
            }
        }

        edit(e){
            this.store.dispatch('setting/edit', serializeJSON(Array.from(dv_cash('#'+this.setting_id).find('form'))));
        }

        saveState(e){
            this.store.dispatch('setting/save');
        }

        resetState(e){
            this.store.dispatch('setting/reset');
        }

        changeAccount(e){
            this.store.dispatch('account/update', { account: dv_cash(e.currentTarget).find('input').val()});
        }

        changeLanguage(e){
            this.store.dispatch('setting/changeLanguage', { language_id: dv_cash(e.currentTarget).find('input').val()});
        }

        changeStore(e){
            this.store.dispatch('setting/changeStore', { setting_id: dv_cash(e.currentTarget).find('input').val()});
        }

        changeLayout(e){
            this.store.dispatch('setting/changeLayout', { layout_codename: dv_cash(e.currentTarget).val()});
        }

        changeSkin(e){
            this.store.dispatch('setting/changeSkin', { skin_codename: dv_cash(e.currentTarget).val()});
        }

        //NEEDS REFACTOR
        this.on('mount', function(){
            dv_cash(this.root).find('.qc-editor').appendTo('body');
        })

        this.on('updated', function(){
            if(this.store.getState().edit){
                this.store.updateLayoutStyle();
            }
        })
        
    </script>

</qc_layout_setting>
<qc_page>
    <div id="page_{opts.page_id}" class="tab-pane page">
        <virtual if={getState().edit}>
            <div if={hasPayment()} class="alert alert-warning">{getLanguage().general.text_no_payment_step}</div>
            <div class="grid gr gr-active" data-grid-id={opts.page_id}>
                <div class="gr-grid-content" if={opts.page}>
                    <div 
                    each={ row, row_id in opts.page.children }
                    no-reorder
                    id={row_id}
                    row={row}
                    row_id={row_id}
                    data-is="qc_row"
                    ></div>
                </div>
                <div class="gr-grid-control">
                    <a class="gr-btn gr-add-row gr-new-row" onclick={addRow}><i class="fa fa-plus"></i> Add Row</a>
                </div>
            </div>
        </virtual>
        <virtual if={!getState().edit}>
            <div 
            each={ row, row_id in opts.page.children }
            no-reorder
            id={row_id}
            row={row}
            row_id={row_id}
            data-is="qc_row"
            ></div>
        </virtual>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;
        var state = this.store.getState();

        addRow(){
            var sort_order = tag.store.countItems(opts.page.children);
            tag.store.dispatch('row/add', {parent : tag.opts.page_id, sort_order: sort_order});
        }

        this.on('mount', function(){
            this.store.hideSpinner();
        })
        
    </script>
</qc_page>
<qc_page_nav>

    <qc_page_nav_setting if={riot.util.tags.selectTags().search('"qc_page_nav_setting"') > 0 && getState().edit} page_id="{opts.page_id}" page="{opts.page}"></qc_page_nav_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_page_nav_setting"') < 0 && getState().edit}></qc_pro_label>


    <a class="process-page-edit {(opts.page.display == '1') ? '' : 'process-page-hidden'}" onclick={pageOpen} if={getState().edit} >
        <div class="text">{opts.page.text}</div>
        <div class="description">{opts.page.description}</div>
        <span class="qc-badge ve-badge ve-badge--warning {(opts.page.display == '1') ? 've-hidden' : ''}">{getLanguage().general.text_hidden}<span></div>
    </a>

    <a if={ !getState().edit } onclick={(opts.status == '2') ? pageOpen : ''}>
        <div class="process-page-label">{opts.page.text}</div>
        <div class="process-page-progress ve-hidden--sm">
            <div class="process-page-progress-bar"></div>
        </div>
        <div class="process-page-dot ve-hidden--sm"></div>
        <div class="process-page-description">{opts.page.description}</div>
    </a>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = 'qc_page_nav_setting_'+ opts.page_id;

        var tag = this;

        pageOpen(e){
            this.store.dispatch('page/open', { page_id: this.opts.page_id, sort_order: this.opts.sort_order });
        }

    </script>
</qc_page_nav>
<qc_popup_setting>
    <div class="popup-setting">
        <div class="popup-setting-header">
            <h2>{opts.title} {getLanguage().general.text_settings}</h2>
            <a class="close" onclick={close}>
                <i class="fa fa-times" ></i>
            </a>
        </div>
        <div class="popup-setting-footer" >
            <a onclick={save}>{getLanguage().general.button_update}</a>
        </div>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});
    </script>
</qc_popup_setting>
<qc_pro_label>
    <a class="ve-badge ve-badge--warning pro-label" onclick={showAlert}>Go PRO</a>
    <div class="get-pro">
        <div class="get-pro-image"><img src="catalog/view/theme/default/image/d_quickcheckout/logo.svg"/></div>
        <div class="get-pro-heading">Get more with PRO.</div>
        <div class="get-pro-text">Wherever you see this label, there is a setting waiting for you! Unlock PRO features like field settings, field sorting, step settings, page settings, layouts and themes. </div>
        <div><strong>Stop losing customers today.</strong><br/><br/></div>
        <div class="get-pro-btn">
            <a class="ve-btn ve-btn--warning ve-btn--hg" href="https://aqc.page.link/getpro" target="_blank">Go PRO -10% OFF</a>
            <br/><br/>
            <small>Ends soon! Will open in a new window</small>
        </div>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        showAlert(){
            alertify.getPro (dv_cash(this.root).find('.get-pro')[0]).set('selector', '#get_pro_popup');
        }
    </script>
</qc_pro_label>
<qc_raw>
    <div></div>
    <script>
        this.mixin({store:d_quickcheckout_store})
        this.set = function(){
            dv_cash(this.root).html(opts.content)
        }
        this.on('update', this.set)
        this.on('mount', this.set)
    </script>
</qc_raw>
<qc_row class="gr gr-row gr-has-controls">
    <virtual if={getState().edit}>
        <div class="gr-control gr-row-control">
            <a class="gr-btn gr-add-col" onclick={addCol}><i class="fa fa-clone"></i> Add column</a> 
            <a class="gr-btn gr-remove-row" onclick={removeRow}><i class="fa fa-times"></i></a>
            <span class="gr-label">ROW</span>
        </div>
        <div class="gr-row-border-top"></div>
        <div class="gr-row-border-right"></div>
        <div class="gr-row-border-bottom"></div>
        <div class="gr-row-border-left"></div>
        <div class="gr-row-content qc-row">
            <div 
                each={ col, col_id in opts.row.children }
                id={col_id}
                col={col}
                col_id={col_id}
                class="qc-col-sm-{ col.size } gr gr-col"
                no-reorder
                data-is="qc_col">
            </div>
        </div>
    </virtual>
    <div if={!getState().edit} class="qc-row">
        <div 
        each={ col, col_id in opts.row.children }
        id={col_id}
        col={col}
        col_id={col_id}
        class="qc-col-sm-{ col.size }"
        data-is="qc_col">
        </div>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;
        var state = this.store.getState();

        addCol(){
            var sort_order = tag.store.countItems(tag.opts.row.children);
            tag.store.dispatch('col/add', {parent : tag.opts.row.id, sort_order: sort_order});
        }

        removeRow(){
            tag.store.dispatch('row/remove', {row_id: tag.opts.row_id});
        }
    </script>
</qc_row>
<qc_setting>

    <div class="qc-setting ve-editor__setting" id="{opts.setting_id}">
        <div class="ve-editor__setting__header">
            <a class="ve-editor__setting__header__title">
                <span>{opts.title} {getLanguage().general.text_settings}</span>
            </a>
            <a class="ve-editor__setting__header__action"  onclick={toggle}><i class="fa fa-minus-square" ></i></a>
            <a class="ve-editor__setting__header__action"  onclick={close}><i class="fa fa-times" ></i></a>
            
        </div>

        <div class="ve-editor__setting__content">

            <form class="form-setting" ref="form">
                <yield/>
            </form>
            
            <div class="ve-editor__setting__footer" >
                <a class="ve-btn ve-btn--primary ve-btn--block" onclick={save}>{getLanguage().general.text_update}</a>
            </div>
        </div>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;

        save(){
            this.store.dispatch('setting/save', serializeJSON(Array.from(dv_cash('.form-setting'))));
        }

        close(){
            this.store.hideSetting();
        }

        toggle(){
            this.store.toggleSetting();
        }

        changeAccount(e){
            this.store.dispatch('account/update', { account: dv_cash(e.currentTarget).find('input').val()});
        }

        this.on('mount', function(){
            dv_cash(this.root).find('.qc-setting').appendTo('body');
        })

        this.on('unmount', function(){
            dv_cash('body').find('#'+this.opts.setting_id).remove();
        })
    </script>
</qc_setting>
<qc_step_setting>
    <form class="step-setting">
        <div class="ve-btn-group ve-btn-group--sm" data-toggle="buttons">
            <label class="ve-btn ve-btn--default handle-sortable" id="{ opts.field_id }">
                <i class="fa fa-arrows"></i>
            </label>
            <a class="ve-btn ve-btn--default " onclick="{toggleSetting}" >
                <i class="fa fa-gear"></i>
            </a>

            <yield/>

            <a class="ve-btn ve-btn--default " onclick="{removeStep}" >
                <i class="fa fa-times"></i>
            </a>
        </div>
    </form>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;
        toggleSetting(e){
            if(dv_cash('#'+ this.opts.setting_id).hasClass('show')){
                this.store.hideSetting()
            }else{
                this.store.showSetting(this.opts.setting_id);
            }
        }
        
        removeStep(e){
            var step_id = dv_cash(e.currentTarget).parents('[data-name="'+this.opts.step+'"]').attr('id');
            this.store.dispatch('step/remove', {step_id : step_id} );
            tag.store.hideSetting();
        }
    </script>
</qc_step_setting>
<qc_switcher>
    <label class="ve-switch">
        <input name={opts.name} type="hidden"  value="0">
        <input name={opts.name} type="checkbox" class="ve-input" ref="switcher" data-label-text={opts.data-label-text} value="1" checked={(this.opts.riotValue == 1)}>
        <i></i>
    </label>
   
</qc_switcher>
<qc_field_captcha>
    
    <qc_captcha_setting
     if={riot.util.tags.selectTags().search('"qc_captcha_setting"') && getState().edit} 
     field_id="{opts.field_id}" 
     field="{opts.field}" 
     step="{opts.step}" 
     ondelete="{opts.ondelete}"
    ></qc_captcha_setting>

    <qc_pro_label if={!riot.util.tags.selectTags().search('"qc_captcha_setting"') && getState().edit}></qc_pro_label>
       
    <div if={ isVisible() && getState().captcha_status == 1 && in_array( getAccount(), getState().config_captcha_page ) && getState().captcha_type == 'basic'  } class="field-sortable d-vis ve-clearfix { (opts.error && isRequired() ) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label">
            { getLanguage()[opts.step][opts.field.text] }
            <span class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <input
                if={!getState().edit }
                type="text"
                id="{ opts.step }_{ opts.field.id }"
                name="{ opts.step }[{ opts.field.id }]"
                class="ve-input d-vis validate { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.type } { opts.field.id }"
                value="{ opts.riotValue }"
                autocomplete="{ opts.field.autocomplete }"
                no-reorder
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                onchange={change}
                />
            <input 
                if={getState().edit }
                class="ve-input"
                type="text"
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                disabled=true
                />
            <img src="index.php?route=extension/d_quickcheckout_captcha/basic_captcha/captcha" alt="" />
            
            <div if={opts.error && isRequired() } class="ve-help ve-text-danger">{getLanguage()[opts.step][opts.error]}</div>
        </div>
    </div>
    

    <div class="no-display" if={ ( !isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /*getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(Array(dv_cash(e.currentTarget))));
        }

        initMask(){
            if(this.opts.field.mask && document.getElementById(this.opts.step + '_' + this.opts.field_id)){
                IMask(document.getElementById(this.opts.step + '_' + this.opts.field_id), this.opts.field.mask);
            }
        }

        this.on('mount', function(){
            this.initMask();
        });
    </script>
</qc_field_captcha>
<qc_field_checkbox>
    <qc_checkbox_setting if={riot.util.tags.selectTags().search('"qc_checkbox_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_checkbox_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_checkbox_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ isVisible() } class="field-sortable d-vis ve-clearfix { (opts.error && isRequired()) ? 've-field--error' : ''}">
        <form class="col-full">
            <label for="{ opts.step }_{ opts.field.id }" class="ve-checkbox {opts.riotValue == 1 ? 'qc-checkbox-selected' : '' }" >
                <input
                    type="hidden"
                    name="{ opts.step }[{ opts.field.id }]"
                    value="0" />
                <input
                    type="checkbox"
                    id="{ opts.step }_{ opts.field.id }"
                    ref="input"
                    name="{ opts.step }[{ opts.field.id }]"
                    class="ve-input validate { isRequired() ? 'qc-required' : 'qc-not-required'}"
                    value="1"
                    no-reorder
                    checked={ opts.riotValue == 1 }
                    { isRequired() ? 'qc-required' : ''}
                    onchange={change} />
                <i></i>
                <span { (opts.field.tooltip) ? 'data-toggle="tooltip"' : '' } title="{getLanguage()[opts.step][opts.field.tooltip] }">
                    <qc_raw content="{ getLanguage()[opts.step][opts.field.text] }"></qc_raw>
                    <span if={ isRequired() } class="require">*</span>
                   <!-- <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle" ref="tooltip"></i></span> -->
                </span>
            </label>
            <div if={opts.error && isRequired()} class="ve-help ve-text-danger">{ getLanguage()[opts.step][opts.error] }</div>
        </form>
    </div>
    <div class="no-display" if={ (!isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" ><qc_raw content="{ getLanguage()[opts.step][opts.field.text] }"></qc_raw><div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /*getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }
        
        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        edit(e){
            this.store.dispatch(this.opts.step+'/edit', serializeJSON(Array.from(dv_cash('#'+ tag.setting_id).find('form'))));
        }

        isVisible(){
            if( !this.store.getState().edit
            && tag.opts.step == 'payment_address' 
            && tag.opts.field_id == 'shipping_address'
            && this.store.getConfig().shipping_address.display == '0'
            && !this.store.getSession().has_shipping){
                return false;
            }

            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }



        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).prop('checked'), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(Array.from(dv_cash(e.currentTarget).parents('form'))));
        };
    </script>
</qc_field_checkbox>
<qc_field_date>

    <qc_date_setting if={riot.util.tags.selectTags().search('"qc_date_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_date_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_date_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ isVisible() } class="field-sortable d-vis ve-clearfix { (opts.error && isRequired()) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label" for="{ opts.step }_{ opts.field_id }">
            { getLanguage()[opts.step][opts.field.text] }
            <span if={ isRequired() } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[parent.opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>

        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <div if={!getState().edit } class="ve-input-group">
                <label type="button" class="ve-btn ve-btn--default " for="{ opts.step }_{ opts.field.id }"><i class="fa fa-calendar"></i></label>
                <input
                    type="text"
                    id="{ opts.step }_{ opts.field.id }"
                    name="{ opts.step }[{ opts.field.id }]"
                    class="ve-input d-vis { (opts.field.mask) ?  'qc-mask': '' } { opts.field.type } validate { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.id }"
                    value="{ opts.riotValue }"
                    no-reorder
                    autocomplete="{ opts.field.autocomplete }"
                    qc-mask="{ opts.field.mask }"
                    data-date-format="{opts.field.format}"
                    placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                    onchange={change} >
            </div>
            <div if={getState().edit } class="ve-input-group">
                <label class="ve-btn d-vis ve-btn--default"><i class="fa fa-calendar"></i></label>
                <input 
                    class="ve-input"
                    type="text"
                    placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                    disabled=true
                    />
            </div>
            <div if={opts.error && isRequired() } class="ve-help ve-text-danger">{ getLanguage()[opts.step][opts.error] }</div>
        </div>
    </div>
    
    <div class="no-display" if={ (!isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /*getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value;

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1);
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value;

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1);
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }

        initDate(){
            var locale = this.store.getSession().language.split('-');
            locale = locale[0];
            d_quickcheckout_flatpickr('#' + this.opts.step + '_' + this.opts.field_id, {
                locale: locale,
                pickTime: false,
                onChange: function(selectedDates, dateStr, e) {
                    error = tag.store.validate(dv_cash(e.input).val(), tag.opts.field.errors);
                    tag.store.dispatch(tag.opts.step+'/error', { 'field_id' : tag.opts.field_id, 'error': error});
                    tag.store.dispatch(tag.opts.step+'/update', serializeJSON(e.input));
                }
            });
        }

        initMask(){
            if(this.opts.field.mask && document.getElementById(this.opts.step + '_' + this.opts.field_id)){
                IMask(document.getElementById(this.opts.step + '_' + this.opts.field_id), this.opts.field.mask);
            }
        };

        this.on('mount', function(){
            this.initDate();
            this.initMask();
        });

        this.on('updated', function(){
            this.initDate();
        });
    </script>
</qc_field_date>

<qc_field_datetime>

    <qc_datetime_setting if={riot.util.tags.selectTags().search('"qc_datetime_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_datetime_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_datetime_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ isVisible() } class="field-sortable d-vis ve-clearfix { (opts.error && isRequired()) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label" for="{ opts.step }_{ opts.field_id }">
            { getLanguage()[opts.step][opts.field.text] }
            <span if={ isRequired() } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[parent.opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        
        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <div if={!getState().edit } class="ve-input-group">
            <label type="button" class="ve-btn d-vis ve-btn-default {isMobile() ? 've-hidden' : ''}" for="{ opts.step }_{ opts.field.id }"><i class="fa fa-calendar"></i></label>
                <input
                    type="text"
                    id="{ opts.step }_{ opts.field.id }"
                    name="{ opts.step }[{ opts.field.id }]"
                    class="ve-input d-vis { (opts.field.mask) ?  'qc-mask': '' } { opts.field.type } validate { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.id }"
                    value="{ opts.riotValue }"
                    no-reorder
                    autocomplete="{ opts.field.autocomplete }"
                    data-date-format="{opts.field.format}"
                    qc-mask="{ opts.field.mask }"
                    placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                    onchange={change}
                    >
            </div>
            <div if={getState().edit } class="ve-input-group">
                <label class="ve-btn d-vis ve-btn-default"><i class="fa fa-calendar"></i></label>
                <input 
                    class="ve-input"
                    type="text"
                    placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                    disabled=true
                    />
            </div>
            <div if={opts.error && isRequired() } class="ve-help ve-text-danger">{ getLanguage()[opts.step][opts.error] }</div>
        </div>
    </div>
    
    <div class="no-display" if={ ( !isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /*getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
            dv_cash('#' + this.opts.step + '_' + this.opts.field_id).trigger('focusout');
        }

        initDateTime(){
            var locale = this.store.getSession().language.split('-');
            locale = locale[0];
            d_quickcheckout_flatpickr('#' + this.opts.step + '_' + this.opts.field_id, {
                enableTime: true,
                time_24hr: true,
                locale: locale,
                minuteIncrement: 1,
                onChange: function(selectedDates, dateStr, e) {
                    error = tag.store.validate(dv_cash(e.input).val(), tag.opts.field.errors);
                    tag.store.dispatch(tag.opts.step+'/error', { 'field_id' : tag.opts.field_id, 'error': error});
                    tag.store.dispatch(tag.opts.step+'/update', serializeJSON(e.input));
                }
            });
        }

        initMask(){
            /*https://imask.js.org/guide.html*/
            if(this.opts.field.mask && document.getElementById(this.opts.step + '_' + this.opts.field_id)){
                IMask(document.getElementById(this.opts.step + '_' + this.opts.field_id), this.opts.field.mask);
            }
        }

        this.on('mount', function(){
            this.initDateTime();
            this.initMask();
        });
    </script>
</qc_field_datetime>

<qc_field_email>
    
    <qc_email_setting if={riot.util.tags.selectTags().search('"qc_email_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_email_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_email_setting"') < 0 && getState().edit}></qc_pro_label>
    
    <div if={ isVisible() } class="field-sortable d-vis ve-clearfix { (opts.error && isRequired() ) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label">
            { getLanguage()[opts.step][opts.field.text] }
            <span if={ isRequired() } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <input
                if={!getState().edit }
                type="email"
                id="{ opts.step }_{ opts.field.id }"
                name="{ opts.step }[{ opts.field.id }]"
                class="ve-input d-vis validate { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.type } { opts.field.id }"
                value="{ opts.riotValue }"
                autocomplete="{ opts.field.autocomplete }"
                no-reorder
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                onchange={change}
                />
            <input 
                if={getState().edit }
                class="ve-input"
                type="text"
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                disabled=true
            />
            <div if={opts.error && isRequired() } class="ve-help ve-text-danger">{getLanguage()[opts.step][opts.error]}</div>
        </div>
    </div>

    <div class="no-display" if={ ( !isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /*getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }

        initMask(){
            if(this.opts.field.mask && document.getElementById(this.opts.step + '_' + this.opts.field_id)){
                IMask(document.getElementById(this.opts.step + '_' + this.opts.field_id), this.opts.field.mask);
            }
        }

        this.on('mount', function(){
            this.initMask();
        });
    </script>
</qc_field_email>

<qc_field_google_recaptcha>
    
    <qc_google_recaptcha_setting
      if={riot.util.tags.selectTags().search('"qc_google_recaptcha_setting"') && getState().edit} 
      field_id="{opts.field_id}" 
      field="{opts.field}" 
      step="{opts.step}" 
      ondelete="{opts.ondelete}"
    ></qc_google_recaptcha_setting>

    <qc_pro_label if={!riot.util.tags.selectTags().search('"qc_google_recaptcha_setting"') && getState().edit}></qc_pro_label>
       
    <div if={ isVisible() && getState().captcha_status == 1 && in_array( getAccount(), getState().config_captcha_page ) && getState().captcha_type == 'google'  } class="field-sortable d-vis ve-clearfix { (opts.error && isRequired() ) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label">
            { getLanguage()[opts.step][opts.field.text] }
            <span class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        <div id="gRecaptcha" class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <input
                type="text"
                id="{ opts.step }_{ opts.field.id }"
                name="{ opts.step }[{ opts.field.id }]"
                class="ve-input d-vis validate { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.type } { opts.field.id }"
                value="{ opts.riotValue }"
                style="display:none;"
                autocomplete="{ opts.field.autocomplete }"
                no-reorder
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }              
                onchange={change}

                />
            <qc_raw content='{ getState().google_script }'></qc_raw>
            <div id="input-payment-captcha" class="g-recaptcha" data-sitekey="{ getState().google_site_key }" change></div>
            <div if={opts.error && isRequired() } class="ve-help ve-text-danger">{getLanguage()[opts.step][opts.error]}</div>
        </div>
            

            <div if={opts.error && isRequired() } class="ve-help ve-text-danger">{getLanguage()[opts.step][opts.error]}</div>
        </div>
    </div>
    

    <div class="no-display" if={ ( !isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /*getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){           
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }

        initMask(){
            if(this.opts.field.mask && document.getElementById(this.opts.step + '_' + this.opts.field_id)){
                IMask(document.getElementById(this.opts.step + '_' + this.opts.field_id), this.opts.field.mask);
            }
        }

        this.on('mount', function(){
            this.initMask();
        });
        
    </script>
</qc_field_google_recaptcha>

    
<qc_field_heading>
    <qc_heading_setting if={riot.util.tags.selectTags().search('"qc_heading_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_heading_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_heading_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ (opts.field.display == 1) } class="d-vis clearboth field-sortable">
        <div class="col-full">
            <h4 class="ve-h4">
            { getLanguage()[opts.step][opts.field.text] }</h4>
            
        </div>
        <hr/>
    </div>

    <div class="no-display" if={ (opts.field.display != 1 && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;
        
    </script>
</qc_field_heading>

<qc_field_label>
    <qc_label_setting if={riot.util.tags.selectTags().search('"qc_label_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_label_setting>
    
    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_label_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ (opts.field.display == 1) } class="d-vis clearfix field-sortable">
        <div class="col-full">
            <label class="ve-label" for="{ opts.step }_{ opts.field.id }">
                { getLanguage()[opts.step][opts.field.text] }
            </label>
            <p id="{ opts.step }_{ opts.field.id }" class="label-text" />
                { opts[opts.step][opts.field.id] }
            </p>
        </div>
    </div>

    <div class="no-display" if={ (opts.field.display != 1 && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;
    </script>
</qc_field_label>

<qc_field_password>
    <qc_password_setting if={riot.util.tags.selectTags().search('"qc_password_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_password_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_password_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={  isVisible() } class="field-sortable d-vis ve-clearfix { (opts.error &&  isVisible()) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label" for="{ opts.step }_{ opts.field.id }">
            { getLanguage()[opts.step][opts.field.text] } 
            <span if={ isRequired() } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <input
                if={!getState().edit }
                type="password"
                id="{ opts.step }_{ opts.field.id }"
                name="{ opts.step }[{ opts.field.id }]"
                class="ve-input d-vis validate { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.type } { opts.field.id }"
                autocomplete="new-password"
                no-reorder
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                onchange={change}>
            <input 
                if={getState().edit }
                class="ve-input"
                type="password"
                disabled=true
            />
            <div if={opts.error && isRequired()} class="ve-help ve-text-danger">{getLanguage()[opts.step][opts.error]}</div>
        </div>
    </div>

    <div class="no-display" if={ (!isVisible() && getState().edit && typeof opts.field.display !== 'undefined')  }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /*getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }
    </script>
</qc_field_password>

<qc_field_radio>

    <qc_radio_setting if={riot.util.tags.selectTags().search('"qc_radio_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_radio_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_radio_setting"') < 0 && getState().edit}></qc_pro_label>
    
    <div if={ (isVisible() && ( opts.field.options.length > 1 || getState().edit)) } class="field-sortable ve-fieldd-vis ve-clearfix { (opts.error && isRequired()) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label" for="{ opts.step }_{ opts.field.id }">
            { getLanguage()[opts.step][opts.field.text] }
            <span if={ isRequired() } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}" >
            <div class="ve-field" each={option in opts.field.options}>
                <label for="{ parent.opts.step }_{ parent.opts.field.id }_{ parent.opts.field.type }_{ option.value }" class="ve-radio { (parent.opts.riotValue == option.value) ? 'qc-radio-selected': '' }">
                    <input
                        if={!getState().edit }
                        type="radio"
                        ref="input"
                        id="{ parent.opts.step }_{ parent.opts.field.id }_{ parent.opts.field.type }_{ option.value }"
                        name="{ parent.opts.step }[{ parent.opts.field.id }]"
                        class="ve-input validate { (parent.opts.field.require) ? 'qc-required' : 'qc-not-required'}"
                        value="{ option.value }"
                        no-reorder
                        checked={ (this.opts.riotValue == option.value) }
                        autocomplete="true"
                        onclick={change}/>
                    <input
                        if={getState().edit }
                        type="radio"
                        class="validate { (parent.opts.field.require) ? 'qc-required' : 'qc-not-required'}"
                        value="{ option.value }"
                        no-reorder
                        checked={ (this.opts.riotValue == option.value) }
                        disabled=disabled
                        onclick={change}/>
                    <i></i>
                     { option.name }
                </label>
                <div if={opts.error && isRequired() } class="ve-help ve-text-danger">{opts.error}</div>
            </div>
        </div>
    </div>

    <div class="no-display" if={ (opts.field.display != 1 && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /**getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }

        dv_cash(tag.root).on('click', '.qc-radio', function(){
            dv_cash(tag.root).find('.qc-radio').removeClass('qc-radio-selected');
            dv_cash(this).addClass('qc-radio-selected');
        });
    </script>
</qc_field_radio>

<qc_field_select>

    <qc_select_setting if={riot.util.tags.selectTags().search('"qc_select_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_select_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_select_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ isVisible() }  class="field-sortable d-vis ve-clearfix { (opts.error && isRequired()) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label" for="{ opts.step }_{ opts.field.id }">
            { getLanguage()[opts.step][opts.field.text] } 
            <span if={ isRequired() } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} qc-select">
            <select
                if={!getState().edit }
                id="{ opts.step }_{ opts.field.id }"
                name="{ opts.step }[{ opts.field.id }]"
                ref="input"
                class="ve-input d-vis qc-select { (getState().config.guest[opts.step].fields[opts.field_id].search == 1) ? 'choiceselectpicker choices__input' : ''} { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.id }"
                required="{ isRequired() }"
                autocomplete="{ opts.field.autocomplete }"
                onchange={change} >
                <option value="" selected={ isEmpty(opts.riotValue) ? true : null} >{ getLanguage()[opts.step][opts.field.placeholder] }</option>
                <option
                    each={option in opts.field.options }
                    if={option}
                    value={ option.value }
                    selected={ (option.value == parent.opts.riotValue) ? true : null} >
                    { option.name } 
                </option>
            </select>
            <i if={getState().config.guest[opts.step].fields[opts.field_id].search != 1} class="qc-select-placeholder">{ getName() } </i>

            <select
                if={getState().edit }
                disabled=disabled
                class="ve-input d-vis  { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.id }"
                no-reorder>
                <option if={ opts.field.custom !=1 } value="" selected={ opts.riotValue == 0} >{ getLanguage()[opts.step][opts.field.placeholder] }</option>
                <option
                    each={option in opts.field.options }
                    if={option}
                    value={ option.value }
                    selected={ option.value == parent.opts.riotValue} >
                    { option.name } 
                </option>
            </select>
            <div if={opts.error && isRequired() } class="ve-help ve-text-danger">{getLanguage()[opts.step][opts.error]}</div>
        </div>
    </div>

    <div class="no-display" if={ (!isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

     <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getName(){
            if (opts.field.options) {
                var result = opts.field.options.filter(function(item){
                    if(item.value == tag.tag_value){
                        return item.name;
                    }
                });
            }
            if(opts.field.options && result[0]){
                return result[0].name;
            }else{
                return getLanguage()[opts.step][opts.field.placeholder]
            }
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }


        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            var value = dv_cash(e.currentTarget).val();
            var targetId = dv_cash(e.currentTarget).attr('id');
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
            
            setTimeout(function(){
                dv_cash('#'+targetId).val(value)
            }, 200);
        }

        this.on('mount', function(){
            if(dv_cash(tag.root).find('.choiceselectpicker')[0] && this.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id].search == 1){
                choices_el = new Choices(dv_cash(tag.root).find('.choiceselectpicker')[0]);
            }
        })

        this.on('update', function(){
            if(typeof choices_el === 'undefined' && dv_cash(tag.root).find('.choiceselectpicker')[0] && this.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id].search == 1){
                setTimeout(function(){
                    choices_el = new Choices(dv_cash(tag.root).find('.choiceselectpicker')[0]);
                },1)
            }
        })

    </script>
</qc_field_select>

<qc_field_tel>

    <qc_tel_setting if={riot.util.tags.selectTags().search('"qc_tel_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_tel_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_tel_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ isVisible() } class="field-sortable d-vis  ve-clearfix  { (opts.error && opts.field.require == 1) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label" for="{ opts.step }_{ opts.field.id }">
            { getLanguage()[opts.step][opts.field.text] } 
            <span if={ (opts.field.require == 1) } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] } " if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <input
                if={!getState().edit }
                type="tel"
                ref="input"
                id="{ opts.step }_{ opts.field.id }"
                name="{ opts.step }[{ opts.field.id }]"
                class="ve-input d-vis { (opts.field.mask) ? 'qc-mask': '' } { (opts.field.require) ? 'qc-required' : 'qc-not-required'} { opts.field.id }"
                value="{ opts.riotValue }"
                autocomplete="{ opts.field.autocomplete }"
                no-reorder
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                qc-mask="{ (opts.field.mask) ? opts.field.mask : '' }"
                onchange={ change }
                />
            <input
                each={error, error_id in opts.field.errors}
                type="hidden"
                class="{ opts.step }-{ opts.field.id }-iso2"
                if={ error.telephone && opts.field.validation == 1 }
                type="tel"
                ref="input"
                name="{ opts.step }[telephone_iso2][{ opts.field.id }]"
                value="{ error.telephone }"
                />

            <input if={getState().edit } 
                class="ve-input"
                type="text"
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                disabled=true
                />
            <div if={opts.error && isRequired()} class="ve-help ve-text-danger">{getLanguage()[opts.step][opts.error]}</div>
        </div>
    </div>

    <div class="no-display" if={ (opts.field.display != 1 && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /*getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            if(this.opts.field.validation == '1' && !this.store.getState().edit){
                var iso2 = document.getElementsByClassName(this.opts.step + '-' + this.opts.field.id + '-iso2').length ? document.getElementsByClassName(this.opts.step + '-' + this.opts.field.id + '-iso2')[0] : null;
                if (iso2) iso2.value = intlTelInput(e.currentTarget).getSelectedCountryData()?.iso2 ? intlTelInput(e.currentTarget).getSelectedCountryData().iso2 : ''; 
                
                e.currentTarget.value = intlTelInput(e.currentTarget).getNumber();
            
                if (e.currentTarget.value.trim()) {
                    if (intlTelInput(e.currentTarget).isValidNumber()) {
                        error = this.store.validate(e.currentTarget.value, this.opts.field.errors);
                    } else {
                        error = 'error_telephone_telephone';
                    }
                    this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error });
                }
                
            }

            var data = serializeJSON(e.currentTarget);

            if (iso2) data = d_quickcheckout_lodash.merge(data, serializeJSON(iso2));

            
            this.store.dispatch(this.opts.step+'/update', data);
        }

        initIntlTelInput(){
            if(this.opts.field.validation == '1' && !this.store.getState().edit && document.getElementById(this.opts.step + '_' + this.opts.field_id)){
                var onlyCountries = [];
                if(this.opts.field.countries){
                    onlyCountries = this.opts.field.countries.split(',');
                }
                
                intlTelInput(document.getElementById(this.opts.step + '_' + this.opts.field_id), {
                  initialCountry: "auto",
                  nationalMode: false,
                  onlyCountries: onlyCountries,
                  geoIpLookup: function(callback) {
                    axios.get('https://ipinfo.io').then(function(resp) {
                        var countryCode = (resp?.data && resp.data?.country) ? resp.data.country : "";
                      callback(countryCode);
                    });
                  }
                });
            }
        }

        initMask(){
            if(this.opts.field.mask && document.getElementById(this.opts.step + '_' + this.opts.field_id)){
                IMask(document.getElementById(this.opts.step + '_' + this.opts.field_id), this.opts.field.mask);
            }
        }

        this.on('mount', function(){
            this.initIntlTelInput();
            this.initMask();
        });

        this.on('updated', function(){
            this.initIntlTelInput();
        });
        
    </script>
</qc_field_tel>

<qc_field_text>

    <qc_text_setting if={riot.util.tags.selectTags().search('"qc_text_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_text_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_text_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ isVisible() } class="field-sortable d-vis ve-clearfix  { (opts.error && isRequired()) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label" for="{ opts.step }_{ opts.field_id }" if={getLanguage()[opts.step][opts.field.text]}>
            { getLanguage()[opts.step][opts.field.text] } 
            <span if={ isRequired() } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] } " if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        <div  class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <input
                if={!getState().edit }
                type="text"
                ref="input"
                id="{ opts.step }_{ opts.field_id }"
                name="{ opts.step }[{opts.field_id}]"
                class="ve-input d-vis validate { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.type } { opts.field_id }"
                value="{ opts.riotValue }"
                no-reorder
                autocomplete="{ opts.field.autocomplete }"
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                onchange={ change }
                />
            <input if={getState().edit } 
                class="ve-input"
                type="text"
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                disabled=true
                />
            <div if={opts.error && isRequired()} class="ve-help ve-text-danger">{ getLanguage()[opts.step][opts.error] }</div>
        </div>
    </div>

    <div class="no-display" if={ (!isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        var tag = this;

       /* getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        initMask(){
            if(this.opts.field.mask && document.getElementById(this.opts.step + '_' + this.opts.field_id)){
                IMask(document.getElementById(this.opts.step + '_' + this.opts.field_id), this.opts.field.mask);
            }
        }

        this.on('mount', function(){
            this.initMask();
        });
    </script>
</qc_field_text>

<qc_field_textarea>

    <qc_textarea_setting if={riot.util.tags.selectTags().search('"qc_textarea_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_textarea_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_textarea_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ isVisible() } class="field-sortable d-vis  ve-clearfix  { (opts.error && isRequired()) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label" for="{ opts.step }_{ opts.field_id }">
            { getLanguage()[opts.step][opts.field.text] } 
            <span if={ (opts.field.require == 1) } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>
        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <textarea
                if={!getState().edit }
                name="{ opts.step }[{ opts.field.id }]"
                ref="input"
                id="{ opts.step }_{ opts.field.id }"
                class="ve-input d-vis validate { (opts.field.require) ? 'qc-required' : 'qc-not-required'} { opts.field.type } { opts.field.id }"
                autocomplete="{ opts.field.autocomplete }"
                no-reorder
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                onchange={ change } >{ opts.riotValue }</textarea>
            <textarea if={getState().edit } 
                class="ve-input"
                disabled=true
                placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                ></textarea>
            <div if={opts.error && opts.field.require == 1} class="ve-help ve-text-danger">{ getLanguage()[opts.step][opts.error] }</div>
        </div>
    </div>

    <div class="no-display" if={ (!isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;

       /* getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1)
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }
    </script>
</qc_field_textarea>

<qc_field_time>

    <qc_time_setting if={riot.util.tags.selectTags().search('"qc_time_setting"') && getState().edit} field_id="{opts.field_id}" field="{opts.field}" step="{opts.step}" ondelete="{opts.ondelete}"></qc_time_setting>

    <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_time_setting"') < 0 && getState().edit}></qc_pro_label>

    <div if={ isVisible() } class="field-sortable d-vis  ve-clearfix  { (opts.error && isRequired()) ? 've-field--error' : ''}">
        <label class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'} ve-label" for="{ opts.step }_{ opts.field_id }">
            { getLanguage()[opts.step][opts.field.text] }
            <span if={ (opts.field.require == 1) } class="require">*</span>
            <span data-balloon-pos="up" aria-label="{ getLanguage()[parent.opts.step][opts.field.tooltip] }" if={ getLanguage()[opts.step][opts.field.tooltip] }><i class="fa fa-question-circle"></i></span>
        </label>

        <div class="{ (getStyle() == 'list') ? 'col-half' : 'col-full'}">
            <div if={!getState().edit } class="ve-input-group">
                <label type="button" class="ve-btn d-vis ve-btn--default {isMobile() ? 've-hidden' : ''}" for="{ opts.step }_{ opts.field.id }"><i class="fa fa-calendar"></i></label>
                <input
                    type="text"
                    id="{ opts.step }_{ opts.field.id }"
                    name="{ opts.step }[{ opts.field.id }]"
                    class="ve-input d-vis { (opts.field.mask) ?  'qc-mask': '' } { opts.field.type } validate { isRequired() ? 'qc-required' : 'qc-not-required'} { opts.field.id }"
                    value="{ opts.riotValue }"
                    no-reorder
                    autocomplete="{ opts.field.autocomplete }"
                    qc-mask="{ opts.field.mask }"
                    data-date-format="{opts.field.format}"
                    placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                    onchange={change} />
            </div>
            <div if={getState().edit } class="ve-input-group">
                <label class="ve-btn d-vis ve-btn--default"><i class="fa fa-calendar"></i></label>
                <input 
                    class="ve-input"
                    type="text"
                    placeholder={ getLanguage()[opts.step][opts.field.placeholder] }
                    disabled=true
                    />
            </div>
            <div if={opts.error && isRequired()} class="ve-help ve-text-danger">{ getLanguage()[opts.step][opts.error] }</div>
        </div>
    </div>
    
    <div class="no-display" if={ (!isVisible() && getState().edit && typeof opts.field.display !== 'undefined') }>
        <label class="col-full" >{ getLanguage()[opts.step][opts.field.text] } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></label>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});
        this.setting_id = opts.step +'_'+ opts.field_id +'_setting';

        var tag = this;

        /*getValue(){
            return this.store.getSession()[tag.opts.step][tag.opts.field_id];
        }

        getTagError(){
            if(this.store.isEmpty(this.store.getError()[tag.opts.step])){ 
                return '' ;
            }
            return this.store.getError()[tag.opts.step][tag.opts.field_id];
        }

        getTagConfig(){
            return JSON.stringify(this.store.getConfig()[tag.opts.step].fields[tag.opts.field_id]);
        }

        tag.tag_value = this.getValue();
        tag.tag_error = this.getTagError();
        tag.tag_config = this.getTagConfig();

        shouldUpdate(){
            if(this.store.getState().edit){
                return true;
            }
            if(tag.tag_value == this.getValue() && tag.tag_error == this.getTagError() && tag.tag_config == this.getTagConfig()) {
                return false;
            }else{
                tag.tag_value = this.getValue();
                tag.tag_error = this.getTagError();
                tag.tag_config = this.getTagConfig();
                return true;
            }
        }*/

        getStyle(){
            var field = tag.store.getState().config.guest[tag.opts.step].fields[tag.opts.field_id];
            return field.style;
        }

        isVisible(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value;

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].display == 1);
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].display == 1;
        }

        isRequired(){
            var field = tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id];

            for (var depend_field_id in field.depends) {
                
                var field_value = tag.store.getSession()[tag.opts.step][depend_field_id];

                for (var depend_field_value_id in field.depends[depend_field_id]){
                    var depend_field_value = field.depends[depend_field_id][depend_field_value_id].value;

                    if(depend_field_value == field_value){
                        return (field.depends[depend_field_id][depend_field_value_id].require == 1);
                    }
                }

            }

            return tag.store.getConfig()[tag.opts.step].fields[tag.opts.field_id].require == 1;
        }

        change(e){
            error = this.store.validate(dv_cash(e.currentTarget).val(), this.opts.field.errors);
            this.store.dispatch(this.opts.step+'/error', { 'field_id' : this.opts.field_id, 'error': error});
            this.store.dispatch(this.opts.step+'/update', serializeJSON(e.currentTarget));
        }

        initMask(){
            if(this.opts.field.mask && document.getElementById(this.opts.step + '_' + this.opts.field_id)){
                IMask(document.getElementById(this.opts.step + '_' + this.opts.field_id), this.opts.field.mask);
            }
        }

        initTime(){    
            var locale = this.store.getSession().language.split('-');
            locale = locale[0];        
            d_quickcheckout_flatpickr('#' + this.opts.step + '_' + this.opts.field_id, {
                locale: locale,
                enableTime: true,
                noCalendar: true,
                time_24hr: true,
                onChange: function(selectedTime, dateTime, e) {
                    error = tag.store.validate(dv_cash(e.input).val(), tag.opts.field.errors);
                    tag.store.dispatch(tag.opts.step+'/error', { 'field_id' : tag.opts.field_id, 'error': error});
                    tag.store.dispatch(tag.opts.step+'/update', serializeJSON(e.input));
                }
            });
        }

        this.on('mount', function(){
            this.initTime();
            this.initMask();
        });
    </script>
</qc_field_time>

<qc_account>
    <div class="step qc-account">

        <qc_account_setting if={riot.util.tags.selectTags().search('"qc_account_setting"') && getState().edit} step="{opts.step}"></qc_account_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_account_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <div if={ (getState().session.account != 'logged') && (getConfig().account.display == 1) } >
            <div class="ve-mb-4" if={ getState().config.guest.account.option.guest.display == 1 || getState().config.guest.account.option.register.display == 1 || (getState().config.guest.account.login_popup == 1 && getState().config.guest.account.option.login.display == 1 )}>
                <div class="ve-btn-group ve-btn-group--block" data-toggle="buttons">
                  <label if={getState().config.guest.account.option.guest.display == 1} class="ve-btn d-vis ve-btn--primary { getAccount() == 'guest' ?  'active' : '' }" onclick={changeAccount}>
                    <input type="radio" name="account" value="guest" id="guest" autocomplete="off" checked={ getAccount() == 'guest' }> {getLanguage().account.entry_guest}
                  </label>
                  <label if={getState().config.guest.account.option.register.display == 1} class="ve-btn d-vis ve-btn--primary { getAccount() == 'register' ?  'active' : '' }" onclick={changeAccount}>
                    <input type="radio" name="account" value="register" id="register" autocomplete="off" checked={ getAccount() == 'register' }> {getLanguage().account.entry_register}
                  </label>
                  <a class="ve-btn d-vis ve-btn--primary" onclick={openLoginPopup} if={getState().config.guest.account.login_popup == 1 && getState().config.guest.account.option.login.display == 1 }> {getLanguage().account.entry_login}
                  </a>
                </div>
            </div>
            
            <!-- style card -->
            <div class="ve-card" if={getState().config.guest.account.login_popup != 1 && getState().config.guest.account.option.login.display == 1 && getState().config.guest.account.style == 'card' }>
                <div class="ve-card__header">
                    <h4 class="ve-h4">
                        <span class="icon">
                            <i class="{ getConfig().account.icon }"></i>
                        </span>
                        { getLanguage().account.heading_title }
                    </h4>
                    <p class="ve-p" if={getLanguage().account.text_description}><qc_raw content="{  getLanguage().account.text_description }"></qc_raw></p>
                </div>
                <div class="ve-card__section">
                    <div if={getError() && getError().account && getError().account.login } class="alert alert-danger">
                        {getError().account.login}
                    </div>
                    <div if={getState().config.guest.account.social_login.display == 1 && getState().config.guest.account.social_login.value} class="qc-row form-group d-vis clearfix qc-social-login">
                        <div class="ve-col-md-12">
                            <qc_raw content="{getState().config.guest.account.social_login.value}"></qc_raw>
                        </div>
                    </div>
                    <form>
                        <div class="ve-field d-vis clearfix">
                            <div class="ve-row">
                                <label class="ve-col-md-5">{getLanguage().account.entry_email}</label>
                                <div class="ve-col-md-7">
                                    <input ref="email" type="text" autocomplete="email" class="ve-input" name="email" value="">
                                </div>
                            </div>
                        </div>
                        <div class="ve-field d-vis clearfix">
                            <div class="ve-row">
                                <label class="ve-col-md-5">{getLanguage().account.entry_password}</label>
                                <div class="ve-col-md-7">
                                    <input ref="password" type="password" autocomplete="current-password" class="ve-input" name="password" value="">
                                </div>
                            </div>
                        </div>

                        <div class="ve-field d-vis clearfix">
                            <div class="ve-row">
                                <div class="ve-col-md-7 ve-col-offset-5">
                                    <button class="ve-btn d-vis ve-btn--primary" onclick={login}>{getLanguage().account.button_login}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- style clear -->
            <div class="ve-mb-3 ve-clearfix" if={getState().config.guest.account.login_popup != 1 && getState().config.guest.account.option.login.display == 1 && getState().config.guest.account.style == 'clear' }>
                <p class="ve-p" if={getLanguage().account.text_description}><qc_raw content="{  getLanguage().account.text_description }"></qc_raw> </p>
            
                <div if={getError() && getError().account && getError().account.login } class="alert alert-danger">
                    {getError().account.login}
                </div>
                <div if={getState().config.guest.account.social_login.display == 1 && getState().config.guest.account.social_login.value} class="qc-row form-group d-vis clearfix qc-social-login">
                    <div class="ve-col-md-12">
                        <qc_raw content="{getState().config.guest.account.social_login.value}"></qc_raw>
                    </div>
                </div>
                <form>
                    <div class="ve-field d-vis clearfix">
                        <div class="ve-row">
                            <label class="ve-col-md-5">{getLanguage().account.entry_email}</label>
                            <div class="ve-col-md-7">
                                <input ref="email" type="text" autocomplete="email" class="ve-input" name="email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="ve-field d-vis clearfix">
                        <div class="ve-row">
                            <label class="ve-col-md-5">{getLanguage().account.entry_password}</label>
                            <div class="ve-col-md-7">
                                <input ref="password" type="password" autocomplete="current-password" class="ve-input" name="password" value="">
                            </div>
                        </div>
                    </div>

                    <div class="ve-field d-vis clearfix">
                        <div class="ve-row">
                            <div class="ve-col-md-7 ve-col-offset-5">
                                <button class="ve-btn d-vis ve-btn--primary" onclick={login}>{getLanguage().account.button_login}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="dvdy-modal" id="login_popup">
                <div class="dvdy-modal-backdrop"></div>
                <div class="dvdy-modal-dialog">
                <div class="dvdy-modal-dialog__content dvdy-modal-sm">
                <div class="ve-card">
                        <form >
                            <div class="ve-card__header">
                                <button type="button" class="dvdy-close">&times;</button>
                                <h4 class="ve-h4">
                                    <span if={ getConfig().account.icon } class="icon">
                                        <i class="{ getConfig().account.icon }"></i>
                                    </span>
                                    {getLanguage().account.entry_login}
                                </h4>
                                <p class="ve-p" if={getLanguage().account.text_description}><qc_raw content="{ getLanguage().account.text_description }"></qc_raw> </p>
                            </div>
                            <div class="ve-card__section">
                                <div if={getError() && getError().account && getError().account.login } class="ve-alert ve-alert--danger">
                                    {getError().account.login}
                                </div>
                            
                                <div if={getState().config.guest.account.social_login.display == 1 && getState().config.guest.account.social_login.value} class="form-group d-vis clearfix qc-social-login">
                                    <qc_raw content="{getState().config.guest.account.social_login.value}"></qc_raw>
                                </div>

                                <div class="ve-field d-vis clearfix">
                                    <label class="ve-label">{getLanguage().account.entry_email}</label>
                                    <input ref="email" type="text" autocomplete="email" class="ve-input" name="email" value="">
                                </div>
                                <div class="ve-field d-vis clearfix">
                                    <label class="ve-label">{getLanguage().account.entry_password}</label>
                                    <input ref="password" type="password" autocomplete="current-password" class="ve-input" name="password" value="">
                                </div>

                            </div>
                            <div class="ve-card__footer">
                                <button class="ve-btn d-vis ve-btn--primary ve-btn--block qc-btn" onclick={login}>{getLanguage().account.button_login}</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div>
                    
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </div>

        <!-- Hidden Step -->
        <div show={(getConfig().account.display != 1 || getState().session.account == 'logged') && getState().edit}>
            <div class="ve-card" style="opacity: 0.5">
                <div class="ve-card__header">{ getLanguage().account.heading_title } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></div>
            </div>
        </div>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;

        login(e){
            this.store.dispatch('account/login', serializeJSON(Array.from(dv_cash(e.currentTarget).parents('form'))));
            e.preventDefault();
        }

        changeAccount(e){
            this.store.dispatch('account/update', { account: dv_cash(e.currentTarget).find('input').val()});
        }

        openLoginPopup(e){
            if (document.getElementById('login_popup')) {
                DvDialogify().initModal('#login_popup').show();
            }
        }

        this.on('mount', function(){
            dv_cash(this.root).find('#login_popup').appendTo('body');
        })

        this.store.subscribe('account/updated', function(data) {
            if(data.session.account == 'logged'){
                //bugfix: required to close the model window.
                if (document.getElementById('login_popup')) {
                    DvDialogify().initModal('#login_popup').hide();
                }
            }
        });

    </script>
</qc_account>

<qc_cart>
    <div class="step  qc-cart">

        <qc_cart_setting if={riot.util.tags.selectTags().search('"qc_cart_setting"') && getState().edit} step="{opts.step}"></qc_cart_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_cart_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <div class="ve-card" if={ getConfig().cart.display == 1 && getState().config.guest.cart.style == 'card' }>
            <div class="ve-card__header">
                <h4 class="ve-h4">
                    <span if={getConfig().cart.icon} class="icon">
                        <i class="{ getConfig().cart.icon }"></i>
                    </span>
                    <span class="text">{ getLanguage().cart.heading_title }</span>
                </h4>
                <p class="ve-p" if={getLanguage().cart.text_description}><qc_raw content="{  getLanguage().cart.text_description }"></qc_raw> </p>
            </div>

            <div class="qc-checkout-product ve-card__section">
                <div each={error, error_id in getError().cart} class="alert alert-danger" if={ error }><qc_raw  content="{error}"></qc_raw></div>
            
                <table class="ve-table ve-table--borderless">
                    <thead class="ve-hidden">
                        <tr>
                            <td class="qc-image" show={ getConfig().cart.columns.image.display == 1} >{ getLanguage().cart.entry_image }</td>
                            <td class="qc-name" show={ getConfig().cart.columns.name.display == 1}>{ getLanguage().cart.entry_name }</td>
                            <td class="qc-model" show={ getConfig().cart.columns.model.display == 1} >{ getLanguage().cart.entry_model }</td>
                            <td class="qc-quantity" show={ getConfig().cart.columns.quantity.display == 1} >{ getLanguage().cart.entry_quantity }</td>
                            <td class="qc-price ve-hidden-xs { ( getConfig().cart.columns.price.display == 1 ) ? '' : 'hidden' }">{ getLanguage().cart.entry_price }</td>
                            <td class="qc-total { ( getConfig().cart.columns.total.display == 1 ) ? '' : 'hidden' }">{ getLanguage().cart.entry_total }</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr each={ product in getSession().cart.products } if={product}>
                            <td class="qc-image" show={ getConfig().cart.columns.image.display == 1} >
                                <a  href="{ raw(product.href) }"
                                    data-container="body"
                                    data-toggle="popover"
                                    data-placement="top"
                                    data-trigger="hover"
                                    class="qc-popover ve-thumbnail" 
                                    data-image="{ product.image }">
                                    <img src="{ product.thumb }" class="img-responsive"/>

                                </a>
                            </td>

                            <td class="qc-name" show={ getConfig().cart.columns.name.display == 1 } >
                                <a href="{ raw(product.href) }" { getConfig().cart.columns.image.display == 1 ? '' : 'rel="popup" data-help=\'<img src="' + product.image + '"/>\'' }>
                                    <qc_raw content="{ product.name }"></qc_raw> <span class="out-of-stock" show={!product.stock}>***</span>
                                </a>
                                <p each={option in product.option}>
                                    <small>{option.name}: {option.value}</small>
                                </p>
                                <p class="ve-help ve-hidden ve-visible--sm">{ product.price } x { product.quantity }</p>
                            </td>

                            <td class="qc-model ve-hidden--sm" show={ getConfig().cart.columns.model.display == 1 }>{ product.model }</td>

                            <td class="qc-quantity ve-hidden--sm" show={ getConfig().cart.columns.quantity.display == 1 }>
                                <div class="ve-input-group">
                                    <button class="ve-btn d-vis ve-btn--primary decrease" data-product="{ product.key }" onclick={decrease}><i class="fa fa-chevron-down"></i></button>
                                    <input type="number" data-mask="9?999999999999999" value="{ product.quantity }"  class="ve-input qc-product-quantity text-center" data-product="{ product.key }" name="cart[{ product.key }]"  data-refresh="2" onchange={change}/>
                                    <button class="ve-btn d-vis ve-btn--primary increase" data-product="{ product.key }" onclick={increase}><i class="fa fa-chevron-up"></i></button>
                                    <button class="ve-btn d-vis ve-btn--danger delete" data-product="{ product.key }"  onclick={delete}><i class="fa fa-times"></i></button>
                                </div>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-btn">
                                        
                                    </span>
                                    <span class="input-group-btn">
                                        
                                    </span>
                                </div>
                            </td>
                            <td class="qc-price ve-hidden--sm { ( getConfig().cart.columns.price.display == 1 )  ? '' : 've-hidden' }">{ product.price }</td>
                            <td class="qc-total { ( getConfig().cart.columns.total.display == 1 )  ? '' : 've-hidden' }">{ product.total }</td>
                        </tr>
                        <hr>
                        <tr each={ voucher in getSession().vouchers } if={voucher}>
                            <td class="qc-image"  >                               
                            </td>
                            <td class="qc-name" >
                                <qc_raw content="{ voucher.description }"></qc_raw>
                                <p class="ve-help ve-hidden ve-visible--sm">{ voucher.amount }</p>
                            </td>
                            <td class="qc-model ve-hidden--sm" show={ getConfig().cart.columns.model.display == 1 }>hello</td>
                            <td class="qc-quantity ve-hidden--sm" >
                                <div class="ve-input-group">
                                </div>
                            </td>
                            <td class="qc-price ve-hidden--sm { ( getConfig().cart.columns.price.display == 1 )  ? '' : 've-hidden' }">{ voucher.price }</td>
                            <td class="qc-total { ( getConfig().cart.columns.total.display == 1 )  ? '' : 've-hidden' }">{ voucher.price }</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <hr class="ve-hr"/>
            <div class="qc-checkout-product ve-card__section">
                <div class="">

                    <div class="ve-field d-vis qc-coupon" show={getConfig().cart.option.coupon.display == '1'}>
                        
                        <div class="ve-alert ve-alert--danger" if={getState().notifications.cart && getState().notifications.cart.error_coupon}>
                            {getState().notifications.cart.error_coupon}
                        </div>
                        <div class="ve-alert ve-alert--success" if={getState().notifications.cart && getState().notifications.cart.success_coupon}>
                            {getState().notifications.cart.success_coupon}
                        </div>
                        <div class="ve-row">
                            <label class="ve-col-md-4 ve-label" >
                                { getLanguage().cart.entry_coupon }
                            </label>
                            <div class="ve-col-md-8">
                                <div class="ve-field ve-field--block">
                                    <input type="text" value="{getSession().coupon}" name="coupon" placeholder="{ getLanguage().cart.entry_coupon }" class="ve-input" onkeydown={changeCoupon}/>
                                    <button class="ve-btn d-vis ve-btn--default" onclick={useCoupon} type="button">{ getLanguage().cart.button_apply }</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ve-field d-vis qc-voucher" show={getConfig().cart.option.voucher.display == '1'}>
                        <div class="ve-alert ve-alert--danger"  if={getState().notifications.cart && getState().notifications.cart.error_voucher}>
                            {getState().notifications.cart.error_voucher}
                        </div>
                        <div class="ve-alert ve-alert--success" if={getState().notifications.cart && getState().notifications.cart.success_voucher}>
                            {getState().notifications.cart.success_voucher}
                        </div>
                        <div class="ve-row">
                            <label class="ve-col-sm-4 ve-col-md-4 ve-label" >
                                { getLanguage().cart.entry_voucher }
                            </label>
                            <div class="ve-col-sm-8 ve-col-md-8">
                                <div class="ve-field ve-field--block">
                                    <input type="text" value="{getSession().voucher}" name="voucher" placeholder="{ getLanguage().cart.entry_voucher }" class="ve-input" onkeydown={changeVoucher}/>
                                    <button class="ve-btn d-vis ve-btn--default" onclick={useVoucher} type="button">{ getLanguage().cart.button_apply }</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="ve-field d-vis qc-reward" show={getConfig().cart.option.reward.display == '1'}>
                        <div class="ve-alert ve-alert--danger" if={getState().notifications.cart && getState().notifications.cart.error_reward}>
                            {getState().notifications.cart.error_reward}
                        </div>
                        <div class="ve-alert ve-alert--success" if={getState().notifications.cart && getState().notifications.cart.success_reward}>
                            {getState().notifications.cart.success_reward}
                        </div>
                        <div class="ve-row">
                            <label class="ve-col-sm-4 ve-label" >
                                { getLanguage().cart.reward_heading_title }
                            </label>
                            <div class="ve-col-sm-8">
                                <div class="ve-field ve-field--block">
                                    <input class="ve-input" type="number" value="{getSession().reward}" name="reward" placeholder="{ getLanguage().cart.entry_reward }" onkeydown={changeReward} />
                                    <button class="ve-btn d-vis ve-btn--default" onclick={useReward} type="button">{ getLanguage().cart.button_apply }</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-horizontal qc-totals">
                    <div class="ve-row ve-clearfix qc-total" each={total in getSession().totals} if={total}>
                        <label class="ve-col-sm-9 ve-col-6 ve-label" ><qc_raw content="{ total.title }"></qc_raw></label>
                        <div class="ve-col-sm-3 ve-col-6 text-right"><qc_raw content="{ total.text }"></qc_raw></div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Step -->
        <div if={ getConfig().cart.display == 1 && getState().config.guest.cart.style == 'clear' } class="ve-mb-3 ve-clearfix">
            <h4 class="ve-h4">
                <span if={getConfig().cart.icon} class="icon">
                    <i class="{ getConfig().cart.icon }"></i>
                </span>
                <span class="text">{ getLanguage().cart.heading_title }</span>
            </h4>
            <p class="ve-p" if={getLanguage().cart.text_description}><qc_raw content="{  getLanguage().cart.text_description }"></qc_raw> </p>

            <div class="qc-checkout-product">
                <div each={error, error_id in getError().cart} class="alert alert-danger" if={ error }><qc_raw  content="{error}"></qc_raw></div>
            
                <table class="ve-table ve-table--borderless">
                    <thead class="ve-hidden">
                        <tr>
                            <td class="qc-image" show={ getConfig().cart.columns.image.display == 1} >{ getLanguage().cart.entry_image }</td>
                            <td class="qc-name" show={ getConfig().cart.columns.name.display == 1}>{ getLanguage().cart.entry_name }</td>
                            <td class="qc-model" show={ getConfig().cart.columns.model.display == 1} >{ getLanguage().cart.entry_model }</td>
                            <td class="qc-quantity" show={ getConfig().cart.columns.quantity.display == 1} >{ getLanguage().cart.entry_quantity }</td>
                            <td class="qc-price ve-hidden-xs { ( getConfig().cart.columns.price.display == 1 ) ? '' : 'hidden' }">{ getLanguage().cart.entry_price }</td>
                            <td class="qc-total { ( getConfig().cart.columns.total.display == 1 ) ? '' : 'hidden' }">{ getLanguage().cart.entry_total }</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr each={ product in getSession().cart.products } if={product}>
                            <td class="qc-image" show={ getConfig().cart.columns.image.display == 1} >
                                <a  href="{ raw(product.href) }"
                                    data-container="body"
                                    data-toggle="popover"
                                    data-placement="top"
                                    data-trigger="hover"
                                    class="qc-popover ve-thumbnail" 
                                    data-image="{ product.image }">
                                    <img src="{ product.thumb }" class="img-responsive"/>

                                </a>
                            </td>

                            <td class="qc-name" show={ getConfig().cart.columns.name.display == 1 } >
                                <a href="{ raw(product.href) }" { getConfig().cart.columns.image.display == 1 ? '' : 'rel="popup" data-help=\'<img src="' + product.image + '"/>\'' }>
                                    <qc_raw content="{ product.name }"></qc_raw>  <span class="out-of-stock" show={!product.stock}>***</span>
                                </a>
                                <p each={option in product.option}>
                                    <small>{option.name}: {option.value}</small>
                                </p>
                                <p class="ve-help ve-hidden ve-visible--sm">{ product.price } x { product.quantity }</p>
                            </td>

                            <td class="qc-model ve-hidden--sm" show={ getConfig().cart.columns.model.display == 1 }>{ product.model }</td>

                            <td class="qc-quantity ve-hidden--sm" show={ getConfig().cart.columns.quantity.display == 1 }>
                                <div class="ve-input-group">
                                    
                                    <button class="ve-btn d-vis ve-btn--primary decrease" data-product="{ product.key }" onclick={decrease}><i class="fa fa-chevron-down"></i></button>
                                    <input type="number" data-mask="9?999999999999999" value="{ product.quantity }"  class="ve-input qc-product-quantity text-center" data-product="{ product.key }" name="cart[{ product.key }]"  data-refresh="2" onchange={change}/>
                                    <button class="ve-btn d-vis ve-btn--primary increase" data-product="{ product.key }" onclick={increase}><i class="fa fa-chevron-up"></i></button>
                                    <button class="ve-btn d-vis ve-btn--danger delete" data-product="{ product.key }"  onclick={delete}><i class="fa fa-times"></i></button>
                                </div>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-btn">
                                        
                                    </span>
                                    <span class="input-group-btn">
                                        
                                    </span>
                                </div>
                            </td>
                            <td class="qc-price ve-hidden--sm { ( getConfig().cart.columns.price.display == 1 )  ? '' : 've-hidden' }">{ product.price }</td>
                            <td class="qc-total { ( getConfig().cart.columns.total.display == 1 )  ? '' : 've-hidden' }">{ product.total }</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr class="ve-hr"/>
            <div class="qc-checkout-product">
                <div class="">

                    <div class="ve-field d-vis qc-coupon" show={getConfig().cart.option.coupon.display == '1'}>
                        
                        <div class="ve-alert ve-alert--danger" if={getState().notifications.cart && getState().notifications.cart.error_coupon}>
                            {getState().notifications.cart.error_coupon}
                        </div>
                        <div class="ve-alert ve-alert--success" if={getState().notifications.cart && getState().notifications.cart.success_coupon}>
                            {getState().notifications.cart.success_coupon}
                        </div>
                        <div class="ve-row">
                            <label class="ve-col-md-4 ve-label" >
                                { getLanguage().cart.entry_coupon }
                            </label>
                            <div class="ve-col-md-8">
                                <div class="ve-field ve-field--block">
                                    <input type="text" value="{getSession().coupon}" name="coupon" placeholder="{ getLanguage().cart.entry_coupon }" class="ve-input" onkeydown={changeCoupon}/>
                                    <button class="ve-btn d-vis ve-btn--default" onclick={useCoupon} type="button">{ getLanguage().cart.button_apply }</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ve-field d-vis qc-voucher" show={getConfig().cart.option.voucher.display == '1'}>
                        <div class="ve-alert ve-alert--danger"  if={getState().notifications.cart && getState().notifications.cart.error_voucher}>
                            {getState().notifications.cart.error_voucher}
                        </div>
                        <div class="ve-alert ve-alert--success" if={getState().notifications.cart && getState().notifications.cart.success_voucher}>
                            {getState().notifications.cart.success_voucher}
                        </div>
                        <div class="ve-row">
                            <label class="ve-col-sm-4 ve-col-md-4 ve-label" >
                                { getLanguage().cart.entry_voucher }
                            </label>
                            <div class="ve-col-sm-8 ve-col-md-8">
                                <div class="ve-field ve-field--block">
                                    <input type="text" value="{getSession().voucher}" name="voucher" placeholder="{ getLanguage().cart.entry_voucher }" class="ve-input" onkeydown={changeVoucher}/>
                                    <button class="ve-btn d-vis ve-btn--default" onclick={useVoucher} type="button">{ getLanguage().cart.button_apply }</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="ve-field d-vis qc-reward" show={getConfig().cart.option.reward.display == '1'}>
                        <div class="ve-alert ve-alert--danger" if={getState().notifications.cart && getState().notifications.cart.error_reward}>
                            {getState().notifications.cart.error_reward}
                        </div>
                        <div class="ve-alert ve-alert--success" if={getState().notifications.cart && getState().notifications.cart.success_reward}>
                            {getState().notifications.cart.success_reward}
                        </div>
                        <div class="ve-row">
                            <label class="ve-col-sm-4 ve-label" >
                                { getLanguage().cart.entry_reward }
                            </label>
                            <div class="ve-col-sm-8">
                                <div class="ve-field ve-field--block">
                                    <input class="ve-input" type="text" value="{getSession().reward}" name="reward" placeholder="{ getLanguage().cart.entry_reward }" onkeydown={changeReward} />
                                    <button class="ve-btn d-vis ve-btn--default" onclick={useReward} type="button">{ getLanguage().cart.button_apply }</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-horizontal qc-totals">
                    <div class="ve-row ve-clearfix qc-total" each={total in getSession().totals} if={total}>
                        <label class="ve-col ve-col-sm-9 ve-label" >{ total.title }</label>
                        <div class="ve-col ve-col-sm-3 text-right">{ total.text }</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Hidden Step -->
        <div show={(getConfig().cart.display != 1 && getState().edit)}>
            <div class="ve-card" style="opacity: 0.5">
                <div class="ve-card__header">{ getLanguage().cart.heading_title } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></div>
            </div>
        </div>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;
        tag.cartLoading = false;

        change(e){
            var $input = dv_cash(e.currentTarget);
            var product_id = dv_cash(e.currentTarget).data('product');
            var quantity = $input.val()
            var data = {};

            var state = this.store.getState();
            dv_cash.each(state.session.cart.products, function(i, product){
                if(product.key == product_id){
                    state.session.cart.products[i].quantity = quantity;
                }

            })
            this.store.setState(state);

            data.cart = {};
            data.cart[$input.attr('data-product')] = quantity;

            this.store.dispatch('cart/update', data);
        }

        increase(e){
            var $input = dv_cash(e.currentTarget).parents('.qc-quantity').find('input.qc-product-quantity');
            var product_id = dv_cash(e.currentTarget).data('product');
            var quantity = parseInt($input.val()) + 1;
            data = {};

            var state = this.store.getState();
            dv_cash.each(state.session.cart.products, function(i, product){
                if(product.key == product_id){
                    state.session.cart.products[i].quantity = quantity;
                }

            })
            this.store.setState(state);
            data.cart = {};
            data.cart[$input.attr('data-product')] = quantity;

            this.store.dispatch('cart/update', data);
        }

        decrease(e){
            var $input = dv_cash(e.currentTarget).parents('.qc-quantity').find('input.qc-product-quantity');
            var product_id = dv_cash(e.currentTarget).data('product');
            var quantity = parseInt($input.val()) - 1;
            var data = {};

            var state = this.store.getState();
            dv_cash.each(state.session.cart.products, function(i, product){
                if(product.key == product_id){
                    state.session.cart.products[i].quantity = quantity;
                }

            })
            this.store.setState(state);

            data.cart = {};
            data.cart[$input.attr('data-product')] = quantity;

            this.store.dispatch('cart/update', data);
        }


        delete(e){
            var $input = dv_cash(e.currentTarget).parents('.qc-quantity').find('input.qc-product-quantity');
            var data = {};

            data.cart = {};
            data.cart[$input.attr('data-product')] = 0;

            this.store.dispatch('cart/update', data);
        }

        changeCoupon(e){
            var state = this.store.getState();
            if(dv_cash(e.currentTarget).val() != state.session.coupon){
                dv_cash(tag.root).find('.qc-coupon .ve-btn')
                            .removeClass('ve-btn--default')
                            .addClass('ve-btn--primary')
            }
            
        }

        useCoupon(e){
            tag.cartLoading = true;
            var coupon = dv_cash(e.currentTarget).parents('.qc-coupon').find('input[name="coupon"]').val();
            this.store.dispatch('cart/update_option', {coupon: coupon});
            dv_cash(tag.root).find('.qc-coupon .ve-btn')
                            .removeClass('ve-btn--default')
                            .addClass('ve-btn--primary')
        }

        changeVoucher(e){
            var state = this.store.getState();
            if(dv_cash(e.currentTarget).val() != state.session.voucher){
                dv_cash(tag.root).find('.qc-voucher .ve-btn--default')
                            .removeClass('ve-btn--default')
                            .addClass('ve-btn--primary ');
            }
            
        }

        useVoucher(e){
            var voucher = dv_cash(e.currentTarget).parents('.qc-voucher').find('input[name="voucher"]').val();
            this.store.dispatch('cart/update_option', {voucher: voucher});
            dv_cash(tag.root).find('.qc-voucher .ve-btn')
                            .removeClass('ve-btn--default')
                            .addClass('ve-btn--primary')
        }

        changeReward(e){
            var state = this.store.getState();
            if(dv_cash(e.currentTarget).val() != state.session.reward){
                dv_cash(tag.root).find('.qc-reward .ve-btn--default')
                            .removeClass('ve-btn--default')
                            .addClass('ve-btn--primary');
            }
            
        }

        useReward(e){
            var reward = dv_cash(e.currentTarget).parents('.qc-reward').find('input[name="reward"]').val();
            this.store.dispatch('cart/update_option', {reward: reward});
            dv_cash(tag.root).find('.qc-reward .ve-btn')
                .removeClass('ve-btn--default')
                .addClass('ve-btn--primary')
        }

        initPopover(){
            /*$('.popover').popover('hide');
            $('.qc-image .qc-popover').popover({
                'html': true,
                'trigger' : 'hover',
                'content' : function () {
                    return '<img src="'+$(this).data('image') + '" />';
                }
            })*/
        }

        this.on('mount', function(){
            this.initPopover();
        })

        this.on('updated', function(){
            this.initPopover();
        })
    </script>
</qc_cart>
<qc_confirm>
    <div class="step qc-confirm">

        <qc_confirm_setting if={riot.util.tags.selectTags().search('"qc_confirm_setting"') && getState().edit} step="{opts.step}"></qc_confirm_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_confirm_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <!-- style card -->
        <div class="ve-card" if={ getConfig().confirm.display == 1 && getState().config.guest.confirm.style == 'card'}>
            <div class="ve-card__header">
                <h4 class="ve-h4">
                    <span if={ getConfig().confirm.icon } class="icon">
                        <i class="{ getConfig().confirm.icon }"></i>
                    </span>
                    { getLanguage().confirm.heading_title }
                </h4>
                <p class="ve-p" if={getLanguage().confirm.text_description}><qc_raw content="{  getLanguage().confirm.text_description }"></qc_raw> </p>
            </div>
            <div class="ve-card__section">
                <button if={prev == 1} class="ve-btn d-vis ve-btn--default ve-btn--lg ve-pull-left qc-page-link" onclick={prevPage}>{getLanguage().confirm.text_prev}</button>
                <button if={next == 1} disabled={getSession().confirm.loading == 1} class="ve-btn d-vis ve-btn--primary ve-btn--hg ve-pull-right qc-page-link {(getSession().confirm.loading == 1)? 've-btn--loading' : ''}" onclick={nextPage}>{getLanguage().confirm.text_next}</button>
                <button if={confirm == 1} onclick={ confirmCheckout } disabled={getSession().confirm.loading == 1} class="ve-btn d-vis ve-btn--primary ve-btn--hg ve-pull-right {(getSession().confirm.loading == 1)? 've-btn--loading' : ''} ">{getLanguage().confirm.button_confirm}</button>
            </div>
        </div>

        <!-- style clear -->
        <div if={ getConfig().confirm.display == 1 && getState().config.guest.confirm.style == 'clear' } class="ve-mb-3 ve-clearfix">
            <p class="ve-p" if={getLanguage().confirm.text_description}><qc_raw content="{  getLanguage().confirm.text_description }"></qc_raw></p>
            <button if={prev == 1} class="ve-btn d-vis ve-btn--default ve-btn--lg ve-pull-left qc-page-link" onclick={prevPage}>{getLanguage().confirm.text_prev}</button>
            <button if={next == 1} disabled={getSession().confirm.loading == 1} class="ve-btn d-vis ve-btn--primary ve-btn--hg ve-pull-right qc-page-link {(getSession().confirm.loading == 1)? 've-btn--loading' : ''}" onclick={nextPage}>{getLanguage().confirm.text_next}</button>
            <button if={confirm == 1} onclick={ confirmCheckout } disabled={getSession().confirm.loading == 1} class="ve-btn d-vis ve-btn--primary ve-btn--hg ve-pull-right {(getSession().confirm.loading == 1)? 've-btn--loading' : ''} ">{getLanguage().confirm.button_confirm}</button>
        </div>

        <!-- Hidden Step -->
        <div show={(getConfig().confirm.display != 1 && getState().edit)}>
            <div class="ve-card" style="opacity: 0.5">
                <div class="ve-card__header">{ getLanguage().confirm.heading_title } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></div>
            </div>
        </div>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;
        var pages = this.store.getSession().pages.filter(function(page){ return page != false } );

        tag.prev = pages[0] != this.store.getSession().page_id && this.store.getState().config.guest.confirm.buttons.prev.display == 1;
        tag.next = pages[pages.length-1] != this.store.getSession().page_id;
        tag.confirm = pages[pages.length-1] == this.store.getSession().page_id;

        confirmCheckout(){
            if( getState().captcha_status == 1 && in_array( getAccount(), getState().config_captcha_page ) && getState().captcha_type == 'google'){
                if(dv_cash('#payment_address_google_recaptcha').val() != dv_cash('textarea[name="g-recaptcha-response"]').val()){
                    dv_cash('#payment_address_google_recaptcha').val(dv_cash('textarea[name="g-recaptcha-response"]').val());
                }
                this.store.dispatch('payment_address/update', serializeJSON(Array.from(dv_cash('#payment_address_google_recaptcha'))));
                setTimeout(() => { this.store.dispatch('confirm/confirm'); }, 1000);
            }
            
            else{
                this.store.dispatch('confirm/confirm');
            }
            
            return false;
        }

        nextPage(e){
            this.store.dispatch('confirm/next');
        }

        prevPage(e){
            this.store.dispatch('confirm/prev');
        }

        this.on("update", function(){
            //this.store.dispatch('payment_address/update', serializeJSON(Array.from(dv_cash('#payment_address_google_recaptcha').parents('form'))));
            tag.prev = pages[0] != this.store.getSession().page_id && this.store.getState().config.guest.confirm.buttons.prev.display == 1;
            tag.next = pages[pages.length-1] != this.store.getSession().page_id;
            tag.confirm = pages[pages.length-1] == this.store.getSession().page_id;
        });
    </script>
</qc_confirm>

<qc_custom>
    <div class="step qc-custom">

        <qc_custom_setting if={riot.util.tags.selectTags().search('"qc_custom_setting"') && getState().edit} step="{opts.step}"></qc_custom_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_custom_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <div class="ve-card" if={ getConfig().custom.display == 1 && getState().config.guest.custom.style == 'card' }>
            <div class="ve-card__header">
                <h4 class="ve-h4">
                    <span if={ getConfig().custom.icon } class="icon">
                        <i class="{ getConfig().custom.icon }"></i>
                    </span>
                    { getLanguage().custom.heading_title }
                </h4>
                <p class="ve-p" if={getLanguage().custom.text_description}><qc_raw content="{  getLanguage().custom.text_description }"></qc_raw> </p>
            </div>
            <div class="ve-card__section">
                
                <form  id="custom_fields" class="custom-fields qc-row" >
                    <div 
                        each={ field_id in fields }
                        if={ (getConfig().custom.fields[field_id])}
                        class="qc-field ve-field qc-{field_id} { (getState().config.guest.custom.fields[field_id].style == 'col') ? 'qc-field-col' : 'qc-clearboth' }"
                        sort_order={ getConfig().custom.fields[field_id].sort_order }
                        field_id={field_id}
                        ondelete={updateFields}
                        step="custom"
                        no-reorder
                        field={ getConfig().custom.fields[field_id] }
                        value={ getSession().custom[field_id] }
                        error={ getError().custom && getError().custom[field_id]}
                        data-is={ getConfig().custom.fields[field_id].type ? 'qc_field_' + getConfig().custom.fields[field_id].type : ''}
                    ></div>
                </form>
                <div if={getState().edit} class="ve-mt-3">
                    <qc_custom_field setting_id="custom_custom_field_{rand()}" step="custom" location_account="true" onchange={updateFields}></qc_custom_field>
                </div>
            </div>
        </div>

        <div if={ getConfig().custom.display == 1 && getState().config.guest.custom.style == 'clear' } class="ve-mb-3 ve-clearfix">
            <p class="ve-p" if={getLanguage().custom.text_description}><qc_raw content="{  getLanguage().custom.text_description }"></qc_raw> </p>
            <form  id="custom_fields" class="custom-fields qc-row" >
                <div 
                    each={ field_id in fields }
                    if={ (getConfig().custom.fields[field_id])}
                    class="qc-field ve-field { (getState().config.guest.custom.fields[field_id].style == 'col') ? 'qc-field-col' : 'qc-clearboth' }"
                    sort_order={ getConfig().custom.fields[field_id].sort_order }
                    field_id={field_id}
                    ondelete={updateFields}
                    step="custom"
                    no-reorder
                    field={ getConfig().custom.fields[field_id] }
                    value={ getSession().custom[field_id] }
                    error={ getError().custom && getError().custom[field_id]}
                    data-is={ getConfig().custom.fields[field_id].type ? 'qc_field_' + getConfig().custom.fields[field_id].type : ''}
                ></div>
            </form>
            <div if={getState().edit} class="ve-mt-3">
                <qc_custom_field setting_id="custom_custom_field_{rand()}" step="custom" location_account="true" onchange={updateFields}></qc_custom_field>
            </div>
        </div>

        <!-- Hidden Step -->
        <div show={(getConfig().custom.display != 1 && getState().edit)}>
            <div class="ve-card" style="opacity: 0.5">
                <div class="ve-card__header"> 
                    { getLanguage().custom.heading_title } 
                    <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;

        tag.fields = this.store.getFieldIds('custom');

        updateFields(){
            tag.fields = this.store.getFieldIds('custom');
            this.store.render();
        }

        this.on('mount', function(){
            this.store.initFieldSortable('custom');
        })
    </script>
</qc_custom>

<qc_payment>
    <div class="step qc-payment">

        <qc_payment_setting if={riot.util.tags.selectTags().search('"qc_payment_setting"') && getState().edit} step="{opts.step}"></qc_payment_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_payment_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <div class="dvdy-modal" id="payment_modal" if={getSession().payment.payment_popup == true}>
            <div class="dvdy-modal-backdrop"></div>
	        <div class="dvdy-modal-dialog">
		        <div class="dvdy-modal-dialog__content">
                    <div class="ve-card">
                        <div class="ve-card__header">
                            <button type="button" class="dvdy-close">&times;</button>
                            <h4 class="ve-h4"><qc_raw content="{ getSession().payment.payment_popup_title }"></qc_raw></h4>
                        </div>
                        <div class="ve-card__section clearfix">
                            <qc_raw content="{getSession().payment.payment}"></qc_raw>
                        </div>
                    </div>
		        </div>
	        </div>
        </div>
        <div class="ve-card" if={getConfig().payment.display == 1 && getState().config.guest.payment.style == 'card' && getSession().payment.payment_popup == false}>
            <div class="ve-card__header">
                <h4 class="ve-h4">
                    <span if={ getConfig().payment.icon } class="icon">
                        <i class="{ getConfig().payment.icon }"></i>
                    </span>
                    <qc_raw content="{ getLanguage().payment.heading_title }"></qc_raw>
                    
                </h4>
                <p class="ve-p" if={getLanguage().payment.text_description}><qc_raw content="{  getLanguage().payment.text_description }"></qc_raw> </p>
            </div>
            <div class="ve-card__section">
                <div if={getState().edit}><qc_raw content="{getSession().payment_method?.title}"></qc_raw></div>
                <div if={!getState().edit}>
                    <div id="payment" show={ getConfig().payment.display == 1 }></div>
                </div>
            </div>
        </div>

        <div class="ve-mb-3 ve-clearfix" if={getConfig().payment.display == 1 && getState().config.guest.payment.style == 'clear' && getSession().payment.payment_popup == false}>
            <p class="ve-p" if={getLanguage().payment.text_description}><qc_raw content="{  getLanguage().payment.text_description }"></qc_raw> </p>
            <div if={getState().edit}><qc_raw content="{getSession().payment_method?.title}"></qc_raw></div>
            <div if={!getState().edit}>
                <div id="payment" show={ getConfig().payment.display == 1 }></div>
            </div>
        </div>

        <!-- Hidden Step -->
        <div show={(getConfig().payment.display != 1 && getState().edit)}>
            <div class="ve-card" style="opacity: 0.5">
                <div class="ve-card__header">
                    { getLanguage().payment.heading_title } 
                    <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;

        var payment = getSession().payment.payment;

        shouldUpdate() { 
            if(this.store.getState().edit){
                return true;
            }
            if(payment != getSession().payment.payment){
                return true 
            }
            return false; 
        }

        this.on('mount', function(){
            dv_cash(tag.root).find('#payment').html(getSession().payment.payment);
            payment = getSession().payment.payment;
        })

        this.on("updated", function(){
            dv_cash(tag.root).find('#payment').html(getSession().payment.payment);
            payment = getSession().payment.payment;
        });

    </script>
</qc_payment>
<qc_payment_address>
    <div class="step qc-payment-address">

        <qc_payment_address_setting if={riot.util.tags.selectTags().search('"qc_payment_address_setting"') && getState().edit} step="{opts.step}"></qc_payment_address_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_payment_address_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <div class="ve-card" if={getConfig().payment_address.display == 1 && getState().config.guest.payment_address.style == 'card'}>
            <div class="ve-card__header">
                <h4 class="ve-h4">
                    <span if={ getConfig().payment_address.icon } class="icon">
                        <i class="{ getConfig().payment_address.icon }"></i>
                    </span>
                    {  getLanguage().payment_address.heading_title } 
                </h4>
                <p class="ve-p" if={getLanguage().payment_address.text_description}><qc_raw content="{  getLanguage().payment_address.text_description }"></qc_raw> </p>
            </div>
            <div class="ve-card__section">
                
                <qc_address_radio 
                if={getSession().addresses && getState().config.guest.payment_address.address_style == 'radio'} 
                step="payment_address" 
                address_id={ getSession().payment_address.address_id }></qc_address_radio>

                <qc_address_select 
                if={getSession().addresses && getState().config.guest.payment_address.address_style == 'select'} 
                step="payment_address" 
                address_id={ getSession().payment_address.address_id }></qc_address_select>

                <div class="{ (getAccount() != 'logged' 
                    || (getAccount() == 'logged' 
                        && (getSession().payment_address.address_id == '0' 
                        || !getSession().payment_address.address_id))) ? '' : 've-hidden' }">
                    <form id="payment_address_fields" class="payment-address-fields qc-row" >
                        <div
                            each={ field_id in fields}
                            if={ (getConfig().payment_address.fields[field_id])}
                            class="qc-field ve-field { (getState().config[getAccount()].payment_address.fields[field_id].display == 0 && !getState().edit) ? 've-hidden' : ''} { (getState().config.guest.payment_address.fields[field_id].style == 'col') ? 'qc-field-col' : 'qc-clearboth' }"
                            sort_order={ getConfig().payment_address.fields[field_id].sort_order }
                            field_id={field_id}
                            step="payment_address"
                            field={ getConfig().payment_address.fields[field_id] }
                            value={ getSession().payment_address[field_id] }
                            error={ getError().payment_address && getError().payment_address[field_id] }
                            ondelete={updateFields}
                            no-reorder
                            data-is={ getConfig().payment_address.fields[field_id].type ? 'qc_field_' + getConfig().payment_address.fields[field_id].type : '' }
                        ></div>
                    </form>
                    <div if={getState().edit} class="ve-mt-3">
                        <qc_custom_field setting_id="payment_address_custom_field_{rand()}" step="payment_address" location_account="true" location_address="true" onchange={updateFields} title={getLanguage().payment_address.heading_title}></qc_custom_field>
                    </div>
                </div>
            </div>
        </div>


        <div class="ve-mb-3 ve-clearfix" if={getConfig().payment_address.display == 1 && getState().config.guest.payment_address.style == 'clear'}>
            <h4 class="ve-h4">
                <span if={ getConfig().payment_address.icon } class="icon">
                    <i class="{ getConfig().payment_address.icon }"></i>
                </span>
                {  getLanguage().payment_address.heading_title } 
            </h4>
            <p class="ve-p" if={getLanguage().payment_address.text_description}><qc_raw content="{  getLanguage().payment_address.text_description } "></qc_raw> </p>

            <qc_address_radio 
            if={getSession().addresses && getState().config.guest.payment_address.address_style == 'radio'} 
            step="payment_address" 
            address_id={ getSession().payment_address.address_id }></qc_address_radio>

            <qc_address_select 
            if={getSession().addresses && getState().config.guest.payment_address.address_style == 'select'} 
            step="payment_address" 
            address_id={ getSession().payment_address.address_id }></qc_address_select>

            <div class="{ (getAccount() != 'logged' 
                || (getAccount() == 'logged' 
                    && (getSession().payment_address.address_id == '0' 
                    || !getSession().payment_address.address_id))) ? '' : 've-hidden' }">
                <form id="payment_address_fields" class="payment-address-fields qc-row" >
                    <div
                        each={ field_id in fields}
                        if={ (getConfig().payment_address.fields[field_id])}
                        class="qc-field ve-field { (getState().config[getAccount()].payment_address.fields[field_id].display == 0 && !getState().edit) ? 've-hidden' : ''} {field_id} { (getState().config.guest.payment_address.fields[field_id].style == 'col') ? 'qc-field-col' : 'qc-clearboth' }"
                        sort_order={ getConfig().payment_address.fields[field_id].sort_order }
                        field_id={field_id}
                        step="payment_address"
                        field={ getConfig().payment_address.fields[field_id] }
                        value={ getSession().payment_address[field_id] }
                        error={ getError().payment_address && getError().payment_address[field_id] }
                        ondelete={updateFields}
                        no-reorder
                        data-is={ getConfig().payment_address.fields[field_id].type ? 'qc_field_' + getConfig().payment_address.fields[field_id].type : '' }
                    ></div>
                </form>
                <div if={getState().edit} class="ve-mt-3">
                    <qc_custom_field setting_id="payment_address_custom_field_{rand()}" step="payment_address" location_account="true" location_address="true" onchange={updateFields} title={getLanguage().payment_address.heading_title}></qc_custom_field>
                </div>
            </div>
        </div>


        <!-- Hidden Step -->
        <div show={(getConfig().payment_address.display != 1 && getState().edit)}>
            <div class="panel panel-default" style="opacity: 0.5">
                <div class="panel-heading">
                    {  getLanguage().payment_address.heading_title} 
                    <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div>
                </div>
            </div>
        </div>

    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;

        tag.fields = this.store.getFieldIds('payment_address');

        updateFields(){
            tag.fields = this.store.getFieldIds('payment_address');
            this.store.render();
        }
        
        this.on('mount', function(){
            this.store.initFieldSortable('payment_address');
        })
    </script>
</qc_payment_address>
<qc_payment_method>
    <div class="step  qc-payment-method">

        <qc_payment_method_setting if={riot.util.tags.selectTags().search('"qc_payment_method_setting"') && getState().edit} step="{opts.step}"></qc_payment_method_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_payment_method_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <div class="ve-card" if={getConfig().payment_method.display == 1 && getState().config.guest.payment_method.style == 'card'}>
            <div class="ve-card__header">
                <h4 class="ve-h4">
                    <span if={ getConfig().payment_method.icon } class="icon">
                        <i class="{ getConfig().payment_method.icon }"></i>
                    </span>
                    <span class="text">{ getLanguage().payment_method.heading_title }</span>
                </h4>
                <p class="ve-p" if={getLanguage().payment_method.text_description}><qc_raw content="{  getLanguage().payment_method.text_description }"></qc_raw> </p>
            </div>
            <div class="ve-card__section">
                <div each={error, error_id in getError().payment_method} if={error} class="ve-alert ve-alert--danger has-error"><qc_raw content="{error}"></qc_raw></div>
                <form id="payment_method_list" if={getConfig().payment_method.display_options == 1 && getSession().payment_methods}>
                    <div if={getState().config.guest.payment_method.input_style == 'radio'}  each={ payment_method, name in getSession().payment_methods } class="ve-field" >
                        <label for="payment-method__{ payment_method.code }" if={ payment_method} class="ve-radio { getSession().payment_method.code == payment_method.code ? 've-radio--selected' : '' }">
                            <img if={ getConfig().payment_method.display_images == 1} class="payment-method-image" src="{payment_method.image}" />
                            <input
                                type="radio"
                                name="payment_method"
                                value="{ payment_method.code }"
                                id="payment-method__{ payment_method.code }"
                                checked={ getSession().payment_method.code == payment_method.code }
                                class="ve-input"
                                onclick={change} />
                            <i></i>
                            <span class="text"><qc_raw content="{ payment_method.title }"></qc_raw></span> <span class="price">{ payment_method.text }</span>
                        </label>
                    </div>

                    <select if={getState().config.guest.payment_method.input_style == 'select'} class="ve-input" name="payment_method" onchange={change}>
                        <option 
                            if={ payment_method}
                            each={ payment_method, name in getSession().payment_methods }
                            value="{ payment_method.code }"
                            selected={ getSession().payment_method.code == payment_method.code }
                            for="{ payment_method.code }">
                            <span class="text"><qc_raw content="{ payment_method.title }"></qc_raw></span> <span class="price">{ payment_method.text }</span>
                        </option>
                    </select>
                </form>
            </div>
        </div>

        <div class="ve-mb-3 ve-clearfix" if={getConfig().payment_method.display == 1 && getState().config.guest.payment_method.style == 'clear'}>
            <h4 class="ve-h4">
                <span if={ getConfig().payment_method.icon } class="icon">
                    <i class="{ getConfig().payment_method.icon }"></i>
                </span>
                <span class="text">{ getLanguage().payment_method.heading_title }</span>
            </h4>
            <p class="ve-p" if={getLanguage().payment_method.text_description}><qc_raw content="{  getLanguage().payment_method.text_description }"></qc_raw> </p>
            <div each={error, error_id in getError().payment_method} if={error} class="ve-alert ve-alert--danger has-error"><qc_raw content="{error}"></qc_raw></div>
            <form id="payment_method_list" if={getConfig().payment_method.display_options == 1 && getSession().payment_methods}>
                <div if={getState().config.guest.payment_method.input_style == 'radio'}  each={ payment_method, name in getSession().payment_methods } class="ve-field" >
                    <label for="payment-method__{ payment_method.code }" if={ payment_method} class="ve-radio { getSession().payment_method.code == payment_method.code ? 've-radio--selected' : '' }">
                        <img if={ getConfig().payment_method.display_images == 1} class="payment-method-image" src="{payment_method.image}" />
                        <input
                            type="radio"
                            name="payment_method"
                            value="{ payment_method.code }"
                            id="payment-method__{ payment_method.code }"
                            checked={ getSession().payment_method.code == payment_method.code }
                            class="ve-input"
                            onclick={change} />
                        <i></i>
                        <span class="text"><qc_raw content="{ payment_method.title }"></qc_raw></span> <span class="price">{ payment_method.text }</span>
                    </label>
                </div>

                <select if={getState().config.guest.payment_method.input_style == 'select'} class="ve-input" name="payment_method" onchange={change}>
                    <option 
                        if={ payment_method}
                        each={ payment_method, name in getSession().payment_methods }
                        value="{ payment_method.code }"
                        selected={ getSession().payment_method.code == payment_method.code }
                        for="{ payment_method.code }">
                        <span class="text"><qc_raw content="{ payment_method.title }"></qc_raw></span> <span class="price">{ payment_method.text }</span>
                    </option>
                </select>
            </form>
        </div>


        <!-- Hidden Step -->
        <div show={(getConfig().payment_method.display != 1 && getState().edit)}>
            <div class="ve-card" style="opacity: 0.5">
                <div class="ve-card__header">{ getLanguage().payment_method.heading_title } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></div>
            </div>
        </div>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;

        change(e){
            this.store.dispatch('payment_method/update', serializeJSON(Array.from(dv_cash(e.currentTarget).parents('form'))));
        }

        dv_cash(tag.root).on('click', '.ve-radio', function(){
            dv_cash(tag.root).find('.ve-radio').removeClass(' ve-radio--selected');
            dv_cash(this).addClass(' ve-radio--selected');
        })

    </script>
</qc_payment_method>

<qc_shipping_address>
    <div class="step qc-shipping-address">

        <qc_shipping_address_setting if={riot.util.tags.selectTags().search('"qc_shipping_address_setting"') && getState().edit} step="{opts.step}"></qc_shipping_address_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_shipping_address_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <div class="ve-card" if={getConfig().shipping_address.display == 1 && getState().config.guest.shipping_address.style == 'card'}>
            <div class="ve-card__header">
                <h4 class="ve-h4">
                    <span if={ getConfig().shipping_address.icon } class="icon">
                        <i class="{ getConfig().shipping_address.icon }"></i>
                    </span>
                    { getLanguage().shipping_address.heading_title }
                </h4>
                <p class="ve-p" if={getLanguage().shipping_address.text_description}><qc_raw content="{  getLanguage().shipping_address.text_description }"></qc_raw> </p>
            </div>

            <div class="ve-card__section">
                <qc_address_radio 
                if={getSession().addresses && getState().config.guest.shipping_address.address_style == 'radio'} 
                step="shipping_address" 
                address_id={ getSession().shipping_address.address_id }></qc_address_radio>

                <qc_address_select 
                if={getSession().addresses && getState().config.guest.shipping_address.address_style == 'select'} 
                step="shipping_address" 
                address_id={ getSession().shipping_address.address_id }></qc_address_select>

                <div 
                    if={getAccount() != 'logged' 
                    || (getAccount() == 'logged' 
                        && (getSession().shipping_address.address_id == '0' 
                        || !getSession().shipping_address.address_id)) }>
                    <form id="shipping_address_fields" class="shipping-address-fields qc-row">
                        <div
                            each={ field_id in fields}
                            if={getConfig().shipping_address.fields[field_id]}
                            class="qc-field ve-field { (getState().config[getAccount()].shipping_address.fields[field_id].display == 0 && !getState().edit) ? 've-hidden' : ''} {field_id} { (getState().config.guest.shipping_address.fields[field_id].style == 'col') ? 'qc-field-col' : 'qc-clearboth' }"
                            sort_order={ getConfig().shipping_address.fields[field_id].sort_order }
                            field_id={field_id}
                            step="shipping_address"
                            no-reorder
                            field={ getConfig().shipping_address.fields[field_id] }
                            value={ getSession().shipping_address[field_id] }
                            ondelete={updateFields}
                            error={ getError().shipping_address && getError().shipping_address[field_id] }
                            data-is={ getConfig().shipping_address.fields[field_id].type ? 'qc_field_' + getConfig().shipping_address.fields[field_id].type : '' }
                        ></div>
                    </form>
                    <div if={getState().edit} class="ve-mt-3">
                        <qc_custom_field setting_id="shipping_address_custom_field{rand()}" step="shipping_address" location_address="true" onchange={updateFields}></qc_custom_field>
                    </div>
                </div>
            </div>
        </div>


        <div class="ve-mb-3 ve-clearfix" if={getConfig().shipping_address.display == 1 && getState().config.guest.shipping_address.style == 'clear'}>
            <h4 class="ve-h4">
                <span if={ getConfig().shipping_address.icon } class="icon">
                    <i class="{ getConfig().shipping_address.icon }"></i>
                </span>
                { getLanguage().shipping_address.heading_title }
            </h4>
            <p class="ve-p" if={getLanguage().shipping_address.text_description}><qc_raw content="{ getLanguage().shipping_address.text_description }"></qc_raw></p>
        
            <qc_address_radio 
            if={getSession().addresses && getState().config.guest.shipping_address.address_style == 'radio'} 
            step="shipping_address" 
            address_id={ getSession().shipping_address.address_id }></qc_address_radio>

            <qc_address_select 
            if={getSession().addresses && getState().config.guest.shipping_address.address_style == 'select'} 
            step="shipping_address" 
            address_id={ getSession().shipping_address.address_id }></qc_address_select>

            <div 
                if={getAccount() != 'logged' 
                || (getAccount() == 'logged' 
                    && (getSession().shipping_address.address_id == '0' 
                    || !getSession().shipping_address.address_id)) }>
                <form id="shipping_address_fields" class="shipping-address-fields qc-row">
                    <div
                        each={ field_id in fields}
                        if={getConfig().shipping_address.fields[field_id]}
                        class="qc-field ve-field { (getState().config[getAccount()].shipping_address.fields[field_id].display == 0 && !getState().edit) ? 've-hidden' : ''} { (getState().config.guest.shipping_address.fields[field_id].style == 'col') ? 'qc-field-col' : 'qc-clearboth' }"
                        sort_order={ getConfig().shipping_address.fields[field_id].sort_order }
                        field_id={field_id}
                        step="shipping_address"
                        no-reorder
                        field={ getConfig().shipping_address.fields[field_id] }
                        value={ getSession().shipping_address[field_id] }
                        ondelete={updateFields}
                        error={ getError().shipping_address && getError().shipping_address[field_id] }
                        data-is={ getConfig().shipping_address.fields[field_id].type ? 'qc_field_' + getConfig().shipping_address.fields[field_id].type : '' }
                    ></div>
                </form>
                <div if={getState().edit} class="ve-mt-3">
                    <qc_custom_field setting_id="shipping_address_custom_field{rand()}" step="shipping_address" location_address="true" onchange={updateFields}></qc_custom_field>
                </div>
            </div>
        </div>

        <!-- Hidden Step -->
        <div show={(getConfig().shipping_address.display != 1 && getState().edit)}>
            <div class="ve-card" style="opacity: 0.5">
                <div class="ve-card__header">{ getLanguage().shipping_address.heading_title } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></div>
            </div>
        </div>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;

        tag.fields = this.store.getFieldIds('shipping_address');

        updateFields(){
            tag.fields = this.store.getFieldIds('shipping_address');
            this.store.render();
        }

        this.on('mount', function(){
            this.store.initFieldSortable('shipping_address');
        })
    </script>
</qc_shipping_address>

<qc_shipping_method>
    <div class="step qc-shipping-method">

        <qc_shipping_method_setting if={riot.util.tags.selectTags().search('"qc_shipping_method_setting"') && getState().edit} step="{opts.step}"></qc_shipping_method_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_shipping_method_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <div class="ve-card" if={ getConfig().shipping_method.display == 1 && getState().config.guest.shipping_method.style == 'card' }>

            <div class="ve-card__header">
                <h4 class="ve-h4">
                    <span if={ getState().config.guest.shipping_method.icon } class="icon">
                        <i class="{ getState().config.guest.shipping_method.icon }"></i>
                    </span>
                    <span class="text">{ getLanguage().shipping_method.heading_title }</span>
                </h4>
                <p class="ve-p" if={getLanguage().shipping_method.text_description}><qc_raw content="{  getLanguage().shipping_method.text_description }"></qc_raw> </p>
            </div>

            <div class="ve-card__section">
                <div each={error, error_id in getError().shipping_method} if={error} class="ve-alert ve-alert--danger ve-field--error"><qc_raw content="{error}"></qc_raw></div>
                <form id="shipping_method_list" if={getState().config.guest.shipping_method.display_options == 1 && getSession().shipping_methods}>
                    
                    <!-- input_style = radio -->
                    <div if={ getState().config.guest.shipping_method.input_style == 'radio'} 
                    each={ shipping_method, name in getSession().shipping_methods } 
                    class="radio-input" >
                        <div if={shipping_method}>
                            <p if={getState().config.guest.shipping_method.display_group_title == 1} class="qc-title"><qc_raw content="{ shipping_method.title }"></qc_raw></p>
                            <div class="ve-field" each={ quote, index in shipping_method.quote } >
                                <label  for="{ quote.code }" class="ve-radio {getSession().shipping_method.code == quote.code ? 've-radio--selected' : ''}">
                                    <input
                                    type="radio"
                                    class="ve-input"
                                    name="shipping_method"
                                    value="{ quote.code }"
                                    id="{ quote.code }"
                                    checked={ getSession().shipping_method.code == quote.code }
                                    onclick={change}/>
                                    <i></i>
                                    <span class="text"><qc_raw content="{ quote.title }"></qc_raw></span> <span class="price">{ quote.text }</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- input_style = select -->
                    <div if={getState().config.guest.shipping_method.input_style == 'select'}>
                        <select name="shipping_method" if={getState().config.guest.shipping_method.display_group_title == 1} class="ve-input" onchange={change}>
                            <optgroup label="{ shipping_method.title }" 
                            each={ shipping_method, name in getSession().shipping_methods } >
                                <option 
                                    each={ quote, index in shipping_method.quote } 
                                    selected={ getSession().shipping_method.code == quote.code }
                                    value="{ quote.code }">
                                    <span class="text"><qc_raw content="{ quote.title }"></qc_raw></span> <span class="price">{ quote.text }</span>
                                </option>
                            </optgroup>
                        </select>

                        <select name="shipping_method" if={getState().config.guest.shipping_method.display_group_title == 0} class="ve-input" onchange={change}>
                            <option 
                                each={ quote, index in flattenShippingMethods() } 
                                selected={ getSession().shipping_method.code == quote.code }
                                value="{ quote.code }">
                                <span class="text"><qc_raw content="{ quote.title }"></qc_raw></span> <span class="price">{ quote.text }</span>
                            </option>
                        </select>
                    </div>
                </form>
            </div>
        </div>


        <div class="ve-mb-3 ve-clearfix" if={ getConfig().shipping_method.display == 1 && getState().config.guest.shipping_method.style == 'clear' }>
            <h4 class="ve-h4">
                <span if={ getState().config.guest.shipping_method.icon } class="icon">
                    <i class="{ getState().config.guest.shipping_method.icon }"></i>
                </span>
                <span class="text">{ getLanguage().shipping_method.heading_title }</span>
            </h4>
            <p class="ve-p" if={getLanguage().shipping_method.text_description}><qc_raw content="{  getLanguage().shipping_method.text_description }"></qc_raw></p>

            <div each={error, error_id in getError().shipping_method} if={error} class="alert alert-danger ve-field--error"><qc_raw content="{error}"></qc_raw></div>
            <form id="shipping_method_list" if={getState().config.guest.shipping_method.display_options == 1 && getSession().shipping_methods}>
                
                <!-- input_style = radio -->
                <div if={ getState().config.guest.shipping_method.input_style == 'radio'} 
                each={ shipping_method, name in getSession().shipping_methods } 
                class="radio-input" >
                    <div if={shipping_method}>
                        <p if={getState().config.guest.shipping_method.display_group_title == 1} class="qc-title"><qc_raw content="{ shipping_method.title }"></qc_raw></p>
                        <div class="ve-field" each={ quote, index in shipping_method.quote } >
                            <label  for="{ quote.code }" class="ve-radio {getSession().shipping_method.code == quote.code ? 've-radio--selected' : ''}">
                                <input
                                type="radio"
                                class="ve-input"
                                name="shipping_method"
                                value="{ quote.code }"
                                id="{ quote.code }"
                                checked={ getSession().shipping_method.code == quote.code }
                                onclick={change}/>
                                <i></i>
                                <span class="text"><qc_raw content="{ quote.title }"></qc_raw></span> <span class="price">{ quote.text }</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- input_style = select -->
                <div if={getState().config.guest.shipping_method.input_style == 'select'}>
                    <select name="shipping_method" if={getState().config.guest.shipping_method.display_group_title == 1} class="ve-input" onchange={change}>
                        <optgroup label="{ shipping_method.title }" 
                        each={ shipping_method, name in getSession().shipping_methods } >
                            <option 
                                each={ quote, index in shipping_method.quote } 
                                selected={ getSession().shipping_method.code == quote.code }
                                value="{ quote.code }">
                                <span class="text"><qc_raw content="{ quote.title }"></qc_raw></span> <span class="price">{ quote.text }</span>
                            </option>
                        </optgroup>
                    </select>

                    <select name="shipping_method" if={getState().config.guest.shipping_method.display_group_title == 0} class="ve-input" onchange={change}>
                        <option 
                            each={ quote, index in flattenShippingMethods() } 
                            selected={ getSession().shipping_method.code == quote.code }
                            value="{ quote.code }">
                            <span class="text"><qc_raw content="{ quote.title }"></qc_raw></span> <span class="price">{ quote.text }</span>
                        </option>
                    </select>
                </div>
            </form>
        </div>

        <div show={(getConfig().shipping_method.display != 1 && getState().edit)}>
            <div class="ve-card" style="opacity: 0.5">
                <div class="ve-card__header">{ getLanguage().shipping_method.heading_title } <div class="ve-pull-right"><span class="ve-badge ve-badge--warning">{getLanguage().general.text_hidden}<span></div></div>
            </div>
        </div>
    </div>
    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;
        
        change(e){
            this.store.dispatch('shipping_method/update', serializeJSON(Array.from(dv_cash(e.currentTarget).parents('form'))));
        }

        flattenShippingMethods(){
            var result = {};
            for (var name in  this.store.getSession().shipping_methods) {
                var shipping_method = this.store.getSession().shipping_methods[name];
                for (var index in shipping_method.quote){
                    var quote = shipping_method.quote[index];
                    result[name+index] = quote ;
                }
            }
            return result;
        }

        dv_cash(tag.root).on('click', '.ve-radio', function(){
            dv_cash(tag.root).find('.ve-radio').removeClass('ve-radio--selected');
            dv_cash(this).addClass('ve-radio--selected');
        })
    </script>
</qc_shipping_method>

