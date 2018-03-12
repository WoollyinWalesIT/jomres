
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
r
a
t
e
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
m
u
l
t
i
_
q
u
e
r
y
_
r
a
t
e
s
 
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
r
a
t
e
s
 
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
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
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

	

	
/
/
g
e
t
 
r
a
t
e
s
 
f
o
r
 
p
r
o
p
e
r
t
y
 
u
i
d

	
/
/
r
e
t
u
r
n
s
 
a
n
 
a
r
r
a
y
 
l
i
k
e
 
$
t
h
i
s
-
>
r
a
t
e
s
[
r
o
o
m
c
l
a
s
s
_
u
i
d
]
[
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
r
a
t
e
s
_
u
i
d
]
[
]

	
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
e
t
_
r
a
t
e
s
(
$
p
r
o
p
e
r
t
y
_
u
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
p
r
o
p
e
r
t
y
_
u
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
 
P
r
o
p
e
r
t
y
 
u
i
d
s
 
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

	
	

	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
a
t
e
s
[
$
p
r
o
p
e
r
t
y
_
u
i
d
]
)
)
 
{

	
	
	
$
t
h
i
s
-
>
g
e
t
_
r
a
t
e
s
_
m
u
l
t
i
(
a
r
r
a
y
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
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
e
 
r
a
t
e
s
 
l
o
a
d
e
d
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
u
i
d

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
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
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;

	
	
}

	
	

	
	
$
t
h
i
s
-
>
r
a
t
e
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
a
t
e
s
[
$
p
r
o
p
e
r
t
y
_
u
i
d
]
;

	
	

	
	
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


 
 
 
 
/
/
g
e
t
 
a
l
l
 
r
a
t
e
s
 
d
e
t
a
i
l
s
 
f
o
r
 
m
u
l
t
i
p
l
e
 
p
r
o
p
e
r
t
y
 
u
i
d
s
 
a
r
r
a
y

 
 
 
 
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
e
t
_
r
a
t
e
s
_
m
u
l
t
i
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

	
	
/
/
i
f
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
i
d
s
 
p
a
s
s
e
d
 
a
r
e
 
n
o
t
 
a
n
 
a
r
r
a
y
,
 
w
e
`
l
l
 
m
a
k
e
 
i
t
 
o
n
e

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
a
r
r
a
y
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
)
 
{

	
	
	
i
f
 
(
(
i
n
t
)
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
>
 
0
)
 
{

	
	
	
	
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
a
r
r
a
y
(
(
i
n
t
)
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
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

	
	
}

	
	

	
	
i
f
 
(
e
m
p
t
y
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
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
 
P
r
o
p
e
r
t
y
 
u
i
d
s
 
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

	
	

	
	
$
t
m
p
_
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
a
r
r
a
y
(
)
;

	
	

	
	
/
/
e
x
c
l
u
d
e
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
i
d
s
 
f
o
r
 
w
h
i
c
h
 
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
e
 
d
a
t
a
 
l
o
a
d
e
d

	
	
f
o
r
e
a
c
h
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
a
s
 
$
p
_
u
i
d
)
 
{

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
a
t
e
s
[
(
i
n
t
)
$
p
_
u
i
d
]
)
)
 
{

	
	
	
	
$
t
m
p
_
p
r
o
p
e
r
t
y
_
u
i
d
s
[
]
 
=
 
(
i
n
t
)
$
p
_
u
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
m
u
l
t
i
_
q
u
e
r
y
_
r
a
t
e
s
[
(
i
n
t
)
$
p
_
u
i
d
]
 
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

	
	
}

	
	

	
	
i
f
 
(
e
m
p
t
y
(
$
t
m
p
_
p
r
o
p
e
r
t
y
_
u
i
d
s
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
 
/
/
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
 
a
l
l
 
t
h
e
 
r
a
t
e
s
 
d
a
t
a
 
w
e
 
n
e
e
d

	
	
}

	
	

	
	
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
$
t
m
p
_
p
r
o
p
e
r
t
y
_
u
i
d
s
;

	
	
u
n
s
e
t
(
$
t
m
p
_
p
r
o
p
e
r
t
y
_
u
i
d
s
)
;


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T

	
	
	
	
	
a
.
r
a
t
e
s
_
u
i
d
,

	
	
	
	
	
a
.
r
a
t
e
_
t
i
t
l
e
,

	
	
	
	
	
a
.
r
a
t
e
_
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

	
	
	
	
	
a
.
v
a
l
i
d
f
r
o
m
,

	
	
	
	
	
a
.
v
a
l
i
d
t
o
,

	
	
	
	
	
a
.
r
o
o
m
r
a
t
e
p
e
r
d
a
y
,

	
	
	
	
	
a
.
m
i
n
d
a
y
s
,

	
	
	
	
	
a
.
m
a
x
d
a
y
s
,
 

	
	
	
	
	
a
.
m
i
n
p
e
o
p
l
e
,
 

	
	
	
	
	
a
.
m
a
x
p
e
o
p
l
e
,
 

	
	
	
	
	
a
.
r
o
o
m
c
l
a
s
s
_
u
i
d
,

	
	
	
	
	
a
.
i
g
n
o
r
e
_
p
p
p
n
,

	
	
	
	
	
a
.
a
l
l
o
w
_
p
h
,

	
	
	
	
	
a
.
a
l
l
o
w
_
w
e
,

	
	
	
	
	
a
.
w
e
e
k
e
n
d
o
n
l
y
,

	
	
	
	
	
a
.
v
a
l
i
d
f
r
o
m
_
t
s
,

	
	
	
	
	
a
.
v
a
l
i
d
t
o
_
t
s
,

	
	
	
	
	
a
.
d
a
y
o
f
w
e
e
k
,

	
	
	
	
	
a
.
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
,

	
	
	
	
	
a
.
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
,

	
	
	
	
	
a
.
p
r
o
p
e
r
t
y
_
u
i
d
,

	
	
	
	
	
b
.
t
a
r
i
f
f
t
y
p
e
_
i
d
,

	
	
	
	
	
c
.
n
a
m
e
,

	
	
	
	
	
c
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
_
r
a
t
e
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
_
x
r
e
f
 
b
 
O
N
 
a
.
r
a
t
e
s
_
u
i
d
 
=
 
b
.
t
a
r
i
f
f
_
i
d
 

	
	
	
	
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
s
 
c
 
O
N
 
b
.
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
 
c
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
p
r
o
p
e
r
t
y
_
u
i
d
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
.
"
)
 
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
r
)
 
{

	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
a
t
e
s
[
(
i
n
t
)
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
(
i
n
t
)
$
r
-
>
r
o
o
m
c
l
a
s
s
_
u
i
d
]
[
(
i
n
t
)
$
r
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
]
[
(
i
n
t
)
$
r
-
>
r
a
t
e
s
_
u
i
d
]
 
=
 
a
r
r
a
y
(

	
	
	
	
'
r
a
t
e
s
_
u
i
d
'
 
=
>
 
(
i
n
t
)
$
r
-
>
r
a
t
e
s
_
u
i
d
,

	
	
	
	
'
r
a
t
e
_
t
i
t
l
e
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
T
A
R
I
F
F
_
T
I
T
L
E
_
T
A
R
I
F
F
T
Y
P
E
_
I
D
'
.
$
r
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
n
a
m
e
)
)
,

	
	
	
	
'
r
a
t
e
_
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
 
=
>
 
$
r
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
,

	
	
	
	
'
v
a
l
i
d
f
r
o
m
'
 
=
>
 
$
r
-
>
v
a
l
i
d
f
r
o
m
,

	
	
	
	
'
v
a
l
i
d
t
o
'
 
=
>
 
$
r
-
>
v
a
l
i
d
t
o
,

	
	
	
	
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
=
>
 
$
r
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
,

	
	
	
	
'
m
i
n
d
a
y
s
'
 
=
>
 
(
i
n
t
)
$
r
-
>
m
i
n
d
a
y
s
,

	
	
	
	
'
m
a
x
d
a
y
s
'
 
=
>
 
(
i
n
t
)
$
r
-
>
m
a
x
d
a
y
s
,

	
	
	
	
'
m
i
n
p
e
o
p
l
e
'
 
=
>
 
(
i
n
t
)
$
r
-
>
m
i
n
p
e
o
p
l
e
,

	
	
	
	
'
m
a
x
p
e
o
p
l
e
'
 
=
>
 
(
i
n
t
)
$
r
-
>
m
a
x
p
e
o
p
l
e
,

	
	
	
	
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
 
=
>
 
(
i
n
t
)
$
r
-
>
r
o
o
m
c
l
a
s
s
_
u
i
d
,

	
	
	
	
'
i
g
n
o
r
e
_
p
p
p
n
'
 
=
>
 
(
i
n
t
)
$
r
-
>
i
g
n
o
r
e
_
p
p
p
n
,

	
	
	
	
'
a
l
l
o
w
_
p
h
'
 
=
>
 
(
i
n
t
)
$
r
-
>
a
l
l
o
w
_
p
h
,

	
	
	
	
'
a
l
l
o
w
_
w
e
'
 
=
>
 
(
i
n
t
)
$
r
-
>
a
l
l
o
w
_
w
e
,

	
	
	
	
'
w
e
e
k
e
n
d
o
n
l
y
'
 
=
>
 
(
i
n
t
)
$
r
-
>
w
e
e
k
e
n
d
o
n
l
y
,

	
	
	
	
'
v
a
l
i
d
f
r
o
m
_
t
s
'
 
=
>
 
(
i
n
t
)
$
r
-
>
v
a
l
i
d
f
r
o
m
_
t
s
,

	
	
	
	
'
v
a
l
i
d
t
o
_
t
s
'
 
=
>
 
(
i
n
t
)
$
r
-
>
v
a
l
i
d
t
o
_
t
s
,

	
	
	
	
'
d
a
y
o
f
w
e
e
k
'
 
=
>
 
(
i
n
t
)
$
r
-
>
d
a
y
o
f
w
e
e
k
,

	
	
	
	
'
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
'
 
=
>
 
(
i
n
t
)
$
r
-
>
m
i
n
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
,

	
	
	
	
'
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
'
 
=
>
 
(
i
n
t
)
$
r
-
>
m
a
x
r
o
o
m
s
_
a
l
r
e
a
d
y
s
e
l
e
c
t
e
d
,

	
	
	
	
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
(
i
n
t
)
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
,

	
	
	
	
'
t
a
r
i
f
f
t
y
p
e
_
i
d
'
 
=
>
 
(
i
n
t
)
$
r
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d

	
	
	
	
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

}

