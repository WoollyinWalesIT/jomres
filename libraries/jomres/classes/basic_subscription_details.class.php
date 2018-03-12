
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
b
a
s
i
c
_
s
u
b
s
c
r
i
p
t
i
o
n
_
d
e
t
a
i
l
s

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
a
t
h
e
r
D
a
t
a
(
$
c
m
s
_
u
s
e
r
_
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
c
m
s
_
u
s
e
r
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
C
M
S
 
u
s
e
r
 
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
w
e
 
a
l
r
e
a
d
y
 
h
a
v
e
 
t
h
i
s
 
c
m
s
 
u
s
e
r
 
i
d
 
s
u
b
s
c
r
i
p
t
i
o
n
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
[
'
i
d
'
]
 
=
 
0
;


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 

	
	
	
	
	
	
a
.
i
d
 
A
S
 
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
,

	
	
	
	
	
	
a
.
c
m
s
_
u
s
e
r
_
i
d
,

	
	
	
	
	
	
a
.
p
a
c
k
a
g
e
_
i
d
,

	
	
	
	
	
	
a
.
s
t
a
t
u
s
,

	
	
	
	
	
	
a
.
r
a
i
s
e
d
_
d
a
t
e
,

	
	
	
	
	
	
a
.
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
,

	
	
	
	
	
	
a
.
i
n
v
o
i
c
e
_
i
d
,

	
	
	
	
	
	
b
.
i
d
,

	
	
	
	
	
	
b
.
n
a
m
e
,

	
	
	
	
	
	
b
.
d
e
s
c
r
i
p
t
i
o
n
,

	
	
	
	
	
	
b
.
p
u
b
l
i
s
h
e
d
,

	
	
	
	
	
	
b
.
f
r
e
q
u
e
n
c
y
,

	
	
	
	
	
	
b
.
f
u
l
l
_
a
m
o
u
n
t
,

	
	
	
	
	
	
b
.
t
a
x
_
c
o
d
e
_
i
d
,

	
	
	
	
	
	
b
.
c
u
r
r
e
n
c
y
c
o
d
e
,

	
	
	
	
	
	
b
.
r
e
n
e
w
a
l
_
p
r
i
c
e
,

	
	
	
	
	
	
b
.
p
a
r
a
m
s
 

	
	
	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
s
u
b
s
c
r
i
p
t
i
o
n
s
 
a
 

	
	
	
	
	
	
L
E
F
T
 
J
O
I
N
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
s
u
b
s
c
r
i
p
t
i
o
n
s
_
p
a
c
k
a
g
e
s
 
b
 
O
N
 
a
.
p
a
c
k
a
g
e
_
i
d
 
=
 
b
.
i
d
 

	
	
	
	
	
W
H
E
R
E
 
a
.
c
m
s
_
u
s
e
r
_
i
d
 
=
 
'
 
.
(
i
n
t
)
 
$
c
m
s
_
u
s
e
r
_
i
d
.
"

	
	
	
	
	
	
A
N
D
 
a
.
s
t
a
t
u
s
 
=
 
1
 

	
	
	
	
	
	
A
N
D
 
D
A
T
E
_
F
O
R
M
A
T
(
a
.
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
,
 
'
%
Y
-
%
m
-
%
d
'
)
 
>
=
 
D
A
T
E
_
F
O
R
M
A
T
(
N
O
W
(
)
,
 
'
%
Y
-
%
m
-
%
d
'
)
 

	
	
	
	
	
L
I
M
I
T
 
1
 
"
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
[
'
i
d
'
]
 
=
 
$
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
[
'
c
m
s
_
u
s
e
r
_
i
d
'
]
 
=
 
$
s
-
>
c
m
s
_
u
s
e
r
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
[
'
p
a
c
k
a
g
e
_
i
d
'
]
 
=
 
$
s
-
>
p
a
c
k
a
g
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
[
'
s
t
a
t
u
s
'
]
 
=
 
$
s
-
>
s
t
a
t
u
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
[
'
r
a
i
s
e
d
_
d
a
t
e
'
]
 
=
 
$
s
-
>
r
a
i
s
e
d
_
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
[
'
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
'
]
 
=
 
$
s
-
>
e
x
p
i
r
a
t
i
o
n
_
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
[
'
i
n
v
o
i
c
e
_
i
d
'
]
 
=
 
$
s
-
>
i
n
v
o
i
c
e
_
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
i
d
'
]
 
=
 
$
s
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
n
a
m
e
'
]
 
=
 
$
s
-
>
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
$
s
-
>
d
e
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
p
u
b
l
i
s
h
e
d
'
]
 
=
 
$
s
-
>
p
u
b
l
i
s
h
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
f
u
l
l
_
a
m
o
u
n
t
'
]
 
=
 
$
s
-
>
f
u
l
l
_
a
m
o
u
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
t
a
x
_
c
o
d
e
_
i
d
'
]
 
=
 
$
s
-
>
t
a
x
_
c
o
d
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
c
u
r
r
e
n
c
y
c
o
d
e
'
]
 
=
 
$
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
r
e
n
e
w
a
l
_
p
r
i
c
e
'
]
 
=
 
$
s
-
>
r
e
n
e
w
a
l
_
p
r
i
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
c
k
a
g
e
[
'
p
a
r
a
m
s
'
]
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
s
-
>
p
a
r
a
m
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

