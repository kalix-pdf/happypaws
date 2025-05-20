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