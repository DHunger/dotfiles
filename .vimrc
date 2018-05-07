no <up> ddkP
no <left> <Nop>
no <right> <Nop>
no <down> ddp

ino <up> <Nop>
ino <left> <Nop>
ino <right> <Nop>
ino <down> <Nop>

vno <up> <Nop>
vno <left> <Nop>
vno <right> <Nop>
vno <down> <Nop>

"" Tab Navigation
ino <C-h> <ESC>:tabprevious<CR>a
ino <C-l> <ESC>:tabnext<CR>a
vno <C-h> <ESC>:tabprevious<CR>
vno <C-l> <ESC>:tabnext<CR>
no <C-h> :tabprevious<CR>
no <C-l> :tabnext<CR>

""Buffer Navigation
no <C-up> :vsplit<CR>
no <C-left> <C-w>h
no <C-right> <C-w>l

"" set colortheme
colorscheme desert

"" enable utf-8
set encoding=utf-8
set fileencoding=utf-8

"" Pathogen

call pathogen#infect()
syntax on
filetype plugin indent on

"" NERDTree Shortcuts
no <C-t> :NERDTreeToggle<CR>
no <C-f> :NERDTreeFocus<CR>

"" NERDTree Highlight
hi NERDTreeDir ctermfg=red ctermbg=none
hi NERDTreeDirSlash ctermfg=11
hi NERDTreeExecFile ctermfg=darkred
hi NERDTreeUp ctermfg=darkgreen
hi NERDTreeCloseable ctermfg=yellow ctermbg=darkyellow
hi NERDTreeOpenable ctermfg=green ctermbg=darkgreen
match Todo "\m//TODO:.*$"
hi Todo ctermfg=green ctermbg=darkgreen
""Line Numbers
set number relativenumber

""Autosave
ino <ESC> <ESC>:w<CR>
ino <C-ESC> <ESC>:w<CR>

"" Up and Download
no <C-u> :Silent expect -f ~/upload.exp dev %<CR>
no <C-d> :Silent expect -f ~/download.exp dev %<CR>
"" Auto Center
no G Gzz
no gg ggzz
no { {zz
no } }zz

"" matching thingies
ino <leader>" ""<ESC>i
ino <leader>' ''<ESC>i
ino <leader>( ()<ESC>i
ino <leader>{ {}<ESC>i
ino <leader>[ []<ESC>i

function Silent(args)
	execute 'silent !' . a:args
	execute 'redraw!'
endfunction

command -nargs=1 Silent call Silent(<q-args>)

function Q()
	execute 'Silent expect -f ~/upload.exp dev %'
	execute 'q'
endfunction

command Q call Q()
