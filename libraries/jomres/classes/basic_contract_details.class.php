
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
c
o
n
t
r
a
c
t
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
c
o
n
t
r
a
c
t
 
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
_
d
a
t
a
(
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
0
,
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
t
r
a
c
t
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
 
C
o
n
t
r
a
c
t
 
u
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

 
 
 
 
 
 
 
 
i
f
 
(
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
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
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
c
o
n
t
r
a
c
t
_
u
i
d
,
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
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
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
c
o
n
t
r
a
c
t
 
a
n
d
 
g
u
e
s
t
 
d
a
t
a
 
c
o
m
b
i
n
e
d
 
i
n
t
o
 
a
 
s
i
n
g
l
e
 
q
u
e
r
y

 
 
 
 
 
 
 
 
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
c
o
n
t
r
a
c
t
_
u
i
d
,

	
	
	
	
	
	
a
.
a
r
r
i
v
a
l
,

	
	
	
	
	
	
a
.
d
e
p
a
r
t
u
r
e
,

	
	
	
	
	
	
a
.
g
u
e
s
t
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
r
u
l
e
s
,

	
	
	
	
	
	
a
.
r
o
o
m
s
_
t
a
r
i
f
f
s
,

	
	
	
	
	
	
a
.
d
e
p
o
s
i
t
_
p
a
i
d
,

	
	
	
	
	
	
a
.
c
o
n
t
r
a
c
t
_
t
o
t
a
l
,

	
	
	
	
	
	
a
.
d
e
p
o
s
i
t
_
r
e
f
,

	
	
	
	
	
	
a
.
p
a
y
m
e
n
t
_
r
e
f
,

	
	
	
	
	
	
a
.
s
p
e
c
i
a
l
_
r
e
q
s
,

	
	
	
	
	
	
a
.
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
,

	
	
	
	
	
	
a
.
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
,

	
	
	
	
	
	
a
.
b
o
o
k
e
d
_
i
n
,

	
	
	
	
	
	
a
.
t
r
u
e
_
a
r
r
i
v
a
l
,

	
	
	
	
	
	
a
.
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
,

	
	
	
	
	
	
a
.
e
x
t
r
a
s
,

	
	
	
	
	
	
a
.
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
,

	
	
	
	
	
	
a
.
e
x
t
r
a
s
v
a
l
u
e
,

	
	
	
	
	
	
a
.
t
a
x
,

	
	
	
	
	
	
a
.
t
a
g
,

	
	
	
	
	
	
a
.
t
i
m
e
s
t
a
m
p
,

	
	
	
	
	
	
a
.
r
o
o
m
_
t
o
t
a
l
,

	
	
	
	
	
	
a
.
d
i
s
c
o
u
n
t
,

	
	
	
	
	
	
a
.
c
u
r
r
e
n
c
y
_
c
o
d
e
,

	
	
	
	
	
	
a
.
c
a
n
c
e
l
l
e
d
,

	
	
	
	
	
	
a
.
c
a
n
c
e
l
l
e
d
_
t
i
m
e
s
t
a
m
p
,

	
	
	
	
	
	
a
.
c
a
n
c
e
l
l
e
d
_
r
e
a
s
o
n
,

	
	
	
	
	
	
a
.
d
i
s
c
o
u
n
t
_
d
e
t
a
i
l
s
,

	
	
	
	
	
	
a
.
u
s
e
r
n
a
m
e
,

	
	
	
	
	
	
a
.
c
o
u
p
o
n
_
i
d
,

	
	
	
	
	
	
a
.
b
o
o
k
e
d
o
u
t
,

	
	
	
	
	
	
a
.
b
o
o
k
e
d
o
u
t
_
t
i
m
e
s
t
a
m
p
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
u
i
d
,

	
	
	
	
	
	
a
.
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
,

	
	
	
	
	
	
a
.
a
p
p
r
o
v
e
d
,

	
	
	
	
	
	
a
.
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
_
i
d
,

	
	
	
	
	
	
a
.
s
e
c
r
e
t
_
k
e
y
,

	
	
	
	
	
	
a
.
b
o
o
k
i
n
g
_
l
a
n
g
u
a
g
e
,

	
	
	
	
	
	
a
.
l
a
s
t
_
c
h
a
n
g
e
d
,

	
	
	
	
	
	
a
.
r
e
f
e
r
r
e
r
,

	
	
	
	
	
	
b
.
m
o
s
_
u
s
e
r
i
d
,

	
	
	
	
	
	
b
.
f
i
r
s
t
n
a
m
e
,

	
	
	
	
	
	
b
.
s
u
r
n
a
m
e
,

	
	
	
	
	
	
b
.
h
o
u
s
e
,

	
	
	
	
	
	
b
.
s
t
r
e
e
t
,

	
	
	
	
	
	
b
.
t
o
w
n
,

	
	
	
	
	
	
b
.
c
o
u
n
t
y
,

	
	
	
	
	
	
b
.
c
o
u
n
t
r
y
,

	
	
	
	
	
	
b
.
p
o
s
t
c
o
d
e
,

	
	
	
	
	
	
b
.
t
e
l
_
l
a
n
d
l
i
n
e
,

	
	
	
	
	
	
b
.
t
e
l
_
m
o
b
i
l
e
,

	
	
	
	
	
	
b
.
e
m
a
i
l
,

	
	
	
	
	
	
b
.
d
i
s
c
o
u
n
t
,

	
	
	
	
	
	
b
.
v
a
t
_
n
u
m
b
e
r
,

	
	
	
	
	
	
b
.
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
,

	
	
	
	
	
	
b
.
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e

	
	
	
	
	
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
c
o
n
t
r
a
c
t
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
_
g
u
e
s
t
s
 
b
 
O
N
 
a
.
g
u
e
s
t
_
u
i
d
 
=
 
b
.
g
u
e
s
t
s
_
u
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
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
 
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
A
N
D
 
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
 
=
 
'
"
.
(
i
n
t
)
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
.
"
'
 
"
;

 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
D
a
t
a
 
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
c
o
n
t
r
a
c
t
D
a
t
a
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
c
o
n
t
r
a
c
t
D
a
t
a
 
a
s
 
$
c
o
n
t
r
a
c
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
c
o
n
t
r
a
c
t
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
o
n
t
r
a
c
t
_
u
i
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
c
o
n
t
r
a
c
t
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
a
r
r
i
v
a
l
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
a
r
r
i
v
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
e
p
a
r
t
u
r
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
e
p
a
r
t
u
r
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
g
u
e
s
t
_
u
i
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
g
u
e
s
t
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
r
a
t
e
_
r
u
l
e
s
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
r
a
t
e
_
r
u
l
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
r
o
o
m
s
_
t
a
r
i
f
f
s
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
r
o
o
m
s
_
t
a
r
i
f
f
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
e
p
o
s
i
t
_
p
a
i
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
e
p
o
s
i
t
_
p
a
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
e
p
o
s
i
t
_
r
e
f
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
e
p
o
s
i
t
_
r
e
f
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
p
a
y
m
e
n
t
_
r
e
f
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
p
a
y
m
e
n
t
_
r
e
f
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
s
p
e
c
i
a
l
_
r
e
q
s
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
s
p
e
c
i
a
l
_
r
e
q
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
b
o
o
k
e
d
_
i
n
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
b
o
o
k
e
d
_
i
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
t
r
u
e
_
a
r
r
i
v
a
l
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
t
r
u
e
_
a
r
r
i
v
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
s
i
n
g
l
e
_
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
e
x
t
r
a
s
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
e
x
t
r
a
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
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
c
o
n
t
r
a
c
t
-
>
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
e
x
t
r
a
s
v
a
l
u
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
e
x
t
r
a
s
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
t
a
x
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
t
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
t
a
g
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
t
a
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
t
i
m
e
s
t
a
m
p
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
t
i
m
e
s
t
a
m
p
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
r
o
o
m
_
t
o
t
a
l
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
r
o
o
m
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
i
s
c
o
u
n
t
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
i
s
c
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
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
_
c
o
d
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
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
_
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
c
a
n
c
e
l
l
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
_
t
i
m
e
s
t
a
m
p
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
c
a
n
c
e
l
l
e
d
_
t
i
m
e
s
t
a
m
p
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
a
n
c
e
l
l
e
d
_
r
e
a
s
o
n
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
c
a
n
c
e
l
l
e
d
_
r
e
a
s
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
d
i
s
c
o
u
n
t
_
d
e
t
a
i
l
s
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
i
s
c
o
u
n
t
_
d
e
t
a
i
l
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
u
s
e
r
n
a
m
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
u
s
e
r
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
o
u
p
o
n
_
i
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
c
o
u
p
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
b
o
o
k
e
d
o
u
t
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
b
o
o
k
e
d
o
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
b
o
o
k
e
d
o
u
t
_
t
i
m
e
s
t
a
m
p
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
b
o
o
k
e
d
o
u
t
_
t
i
m
e
s
t
a
m
p
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
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
u
i
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
c
h
a
n
n
e
l
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
a
p
p
r
o
v
e
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
a
p
p
r
o
v
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
s
e
c
r
e
t
_
k
e
y
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
s
e
c
r
e
t
_
k
e
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
b
o
o
k
i
n
g
_
l
a
n
g
u
a
g
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
b
o
o
k
i
n
g
_
l
a
n
g
u
a
g
e
;

	
	
	
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
l
a
s
t
_
c
h
a
n
g
e
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
l
a
s
t
_
c
h
a
n
g
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
r
e
f
e
r
r
e
r
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
r
e
f
e
r
r
e
r
;

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
_
i
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
b
o
o
k
i
n
g
_
d
a
t
a
_
a
r
c
h
i
v
e
_
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
u
e
s
t
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
i
m
a
g
e
'
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
n
o
i
m
a
g
e
.
g
i
f
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
u
s
e
r
i
m
a
g
e
s
'
.
J
R
D
S
.
'
u
s
e
r
i
m
a
g
e
_
'
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
-
>
m
o
s
_
u
s
e
r
i
d
.
'
.
j
p
g
'
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
i
m
a
g
e
'
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
'
u
s
e
r
i
m
a
g
e
s
/
u
s
e
r
i
m
a
g
e
_
'
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
-
>
m
o
s
_
u
s
e
r
i
d
.
'
_
t
h
u
m
b
n
a
i
l
.
j
p
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
f
i
r
s
t
n
a
m
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
f
i
r
s
t
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
s
u
r
n
a
m
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
s
u
r
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
h
o
u
s
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
h
o
u
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
s
t
r
e
e
t
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
s
t
r
e
e
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
t
o
w
n
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
t
o
w
n
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
m
e
r
i
c
(
$
c
o
n
t
r
a
c
t
-
>
c
o
u
n
t
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
j
o
m
r
e
s
_
r
e
g
i
o
n
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
c
o
u
n
t
y
'
]
 
=
 
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
R
E
G
I
O
N
S
_
'
.
$
c
o
n
t
r
a
c
t
-
>
c
o
u
n
t
y
,
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
s
-
>
g
e
t
_
r
e
g
i
o
n
_
n
a
m
e
(
$
c
o
n
t
r
a
c
t
-
>
c
o
u
n
t
y
)
,
 
f
a
l
s
e
)
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
c
o
u
n
t
y
'
]
 
=
 
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
P
R
O
P
E
R
T
Y
_
R
E
G
I
O
N
'
.
$
c
o
n
t
r
a
c
t
-
>
c
o
u
n
t
y
,
 
$
c
o
n
t
r
a
c
t
-
>
c
o
u
n
t
y
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
c
o
u
n
t
r
y
'
]
 
=
 
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
(
$
c
o
n
t
r
a
c
t
-
>
c
o
u
n
t
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
c
o
u
n
t
r
y
_
c
o
d
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
c
o
u
n
t
r
y
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
p
o
s
t
c
o
d
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
p
o
s
t
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
t
e
l
_
l
a
n
d
l
i
n
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
t
e
l
_
l
a
n
d
l
i
n
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
t
e
l
_
m
o
b
i
l
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
t
e
l
_
m
o
b
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
e
m
a
i
l
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
e
m
a
i
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
d
i
s
c
o
u
n
t
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
d
i
s
c
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
v
a
t
_
n
u
m
b
e
r
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
v
a
t
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
d
e
e
t
s
'
]
[
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
'
]
 
=
 
$
c
o
n
t
r
a
c
t
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
_
r
e
s
p
o
n
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
e
x
t
r
a
 
s
e
r
v
i
c
e
s
 
d
a
t
a

 
 
 
 
 
 
 
 
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
e
x
t
r
a
s
e
r
v
i
c
e
_
u
i
d
,

	
	
	
	
	
	
a
.
s
e
r
v
i
c
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
s
e
r
v
i
c
e
_
v
a
l
u
e
,

	
	
	
	
	
	
a
.
t
a
x
_
r
a
t
e
_
v
a
l
,

	
	
	
	
	
	
a
.
t
a
x
_
c
o
d
e
,

	
	
	
	
	
	
a
.
s
e
r
v
i
c
e
_
q
t
y

	
	
	
	
	
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
e
x
t
r
a
s
e
r
v
i
c
e
s
 
a
 

	
	
	
	
	
W
H
E
R
E
 
a
.
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
 
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
"
;

 
 
 
 
 
 
 
 
$
e
x
t
r
a
S
e
r
v
i
c
e
s
D
a
t
a
 
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


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
e
x
t
r
a
S
e
r
v
i
c
e
s
D
a
t
a
 
a
s
 
$
e
x
t
r
a
S
e
r
v
i
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
s
e
r
v
i
c
e
'
]
[
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
e
x
t
r
a
s
e
r
v
i
c
e
_
u
i
d
]
[
'
e
x
t
r
a
s
e
r
v
i
c
e
_
u
i
d
'
]
 
=
 
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
e
x
t
r
a
s
e
r
v
i
c
e
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
s
e
r
v
i
c
e
'
]
[
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
e
x
t
r
a
s
e
r
v
i
c
e
_
u
i
d
]
[
'
s
e
r
v
i
c
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
]
 
=
 
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
s
e
r
v
i
c
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
s
e
r
v
i
c
e
'
]
[
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
e
x
t
r
a
s
e
r
v
i
c
e
_
u
i
d
]
[
'
s
e
r
v
i
c
e
_
v
a
l
u
e
'
]
 
=
 
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
s
e
r
v
i
c
e
_
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
s
e
r
v
i
c
e
'
]
[
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
e
x
t
r
a
s
e
r
v
i
c
e
_
u
i
d
]
[
'
t
a
x
_
r
a
t
e
_
v
a
l
'
]
 
=
 
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
t
a
x
_
r
a
t
e
_
v
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
s
e
r
v
i
c
e
'
]
[
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
e
x
t
r
a
s
e
r
v
i
c
e
_
u
i
d
]
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
'
]
 
=
 
$
e
x
t
r
a
S
e
r
v
i
c
e
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
s
e
r
v
i
c
e
'
]
[
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
e
x
t
r
a
s
e
r
v
i
c
e
_
u
i
d
]
[
'
s
e
r
v
i
c
e
_
q
t
y
'
]
 
=
 
$
e
x
t
r
a
S
e
r
v
i
c
e
-
>
s
e
r
v
i
c
e
_
q
t
y
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
r
o
o
m
s
 
d
a
t
a

 
 
 
 
 
 
 
 
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
 
 

	
	
	
	
	
	
D
I
S
T
I
N
C
T
(
a
.
r
o
o
m
_
u
i
d
)
,

	
	
	
	
	
	
a
.
b
l
a
c
k
_
b
o
o
k
i
n
g
,

	
	
	
	
	
	
a
.
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
,

	
	
	
	
	
	
a
.
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
,

	
	
	
	
	
	
b
.
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,

	
	
	
	
	
	
b
.
r
o
o
m
_
n
a
m
e
,

	
	
	
	
	
	
b
.
r
o
o
m
_
n
u
m
b
e
r
,

	
	
	
	
	
	
b
.
r
o
o
m
_
f
l
o
o
r
,

	
	
	
	
	
	
b
.
m
a
x
_
p
e
o
p
l
e
,

	
	
	
	
	
	
b
.
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t

	
	
	
	
	
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
o
o
m
_
b
o
o
k
i
n
g
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
_
r
o
o
m
s
 
b
 
O
N
 
a
.
r
o
o
m
_
u
i
d
 
=
 
b
.
r
o
o
m
_
u
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
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
 
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
A
N
D
 
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
 
=
 
'
"
.
(
i
n
t
)
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
.
"
'
 
"
;

 
 
 
 
 
 
 
 
$
r
o
o
m
B
o
o
k
i
n
g
s
D
a
t
a
 
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
o
o
m
B
o
o
k
i
n
g
s
D
a
t
a
 
a
s
 
$
r
o
o
m
B
o
o
k
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
u
i
d
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
b
l
a
c
k
_
b
o
o
k
i
n
g
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
b
l
a
c
k
_
b
o
o
k
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
c
l
a
s
s
e
s
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
n
a
m
e
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
n
u
m
b
e
r
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
f
l
o
o
r
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
f
l
o
o
r
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
m
a
x
_
p
e
o
p
l
e
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
m
a
x
_
p
e
o
p
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
o
o
m
B
o
o
k
i
n
g
-
>
r
o
o
m
_
u
i
d
]
[
'
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
]
 
=
 
$
r
o
o
m
B
o
o
k
i
n
g
-
>
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
t
a
r
i
f
f
s
 
d
a
t
a

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
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
a
r
i
f
f
N
a
m
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
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
i
n
f
o
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
r
o
o
m
s
_
t
a
r
i
f
f
s
'
]
)
;

 
 
 
 
 
 
 
 
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
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
i
n
f
o
 
a
s
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
t
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
s
[
]
 
=
 
$
r
t
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
a
r
i
f
f
s
)
 
&
&
 
$
r
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
i
n
f
o
 
!
=
 
a
r
r
a
y
(
0
 
=
>
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
`
r
a
t
e
s
_
u
i
d
`
,
`
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
`
 
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
 
W
H
E
R
E
 
`
r
a
t
e
s
_
u
i
d
`
 
I
N
 
(
'
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
t
a
r
i
f
f
s
)
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
_
n
a
m
e
s
 
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


 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
a
r
i
f
f
_
n
a
m
e
s
 
a
s
 
$
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
N
a
m
e
s
[
$
t
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
 
$
t
-
>
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
o
o
m
_
a
n
d
_
t
a
r
i
f
f
_
i
n
f
o
 
a
s
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
t
 
=
 
e
x
p
l
o
d
e
(
'
^
'
,
 
$
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
t
a
r
i
f
f
N
a
m
e
s
[
$
r
t
[
1
]
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
t
[
0
]
]
[
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
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
$
t
a
r
i
f
f
N
a
m
e
s
[
$
r
t
[
1
]
]
)
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
r
o
o
m
d
e
e
t
s
'
]
[
$
r
t
[
0
]
]
[
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
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
u
e
s
t
 
t
y
p
e
s

 
 
 
 
 
 
 
 
$
g
u
e
s
t
t
y
p
e
_
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

 
 
 
 
 
 
 
 
$
g
u
e
s
t
t
y
p
e
N
a
m
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
v
a
r
i
a
n
c
e
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
r
a
t
e
_
r
u
l
e
s
'
]
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
v
a
r
i
a
n
c
e
A
r
r
a
y
 
a
s
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
D
e
e
t
s
 
=
 
e
x
p
l
o
d
e
(
'
_
'
,
 
$
v
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
D
e
e
t
s
[
0
]
 
=
=
 
'
g
u
e
s
t
t
y
p
e
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
t
y
p
e
_
i
d
s
[
]
 
=
 
$
v
D
e
e
t
s
[
1
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
g
u
e
s
t
t
y
p
e
_
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
`
i
d
`
,
 
`
t
y
p
e
`
 
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
c
u
s
t
o
m
e
r
t
y
p
e
s
 
W
H
E
R
E
 
i
d
 
I
N
 
(
'
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
g
u
e
s
t
t
y
p
e
_
i
d
s
)
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
t
y
p
e
_
t
i
t
l
e
s
 
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


 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
g
u
e
s
t
t
y
p
e
_
t
i
t
l
e
s
 
a
s
 
$
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
t
y
p
e
N
a
m
e
s
[
$
g
-
>
i
d
]
 
=
 
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
G
U
E
S
T
T
Y
P
E
'
.
$
g
-
>
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
g
-
>
t
y
p
e
)
,
 
f
a
l
s
e
)
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
v
a
r
i
a
n
c
e
A
r
r
a
y
 
a
s
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
D
e
e
t
s
 
=
 
e
x
p
l
o
d
e
(
'
_
'
,
 
$
v
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
D
e
e
t
s
[
0
]
 
=
=
 
'
g
u
e
s
t
t
y
p
e
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
t
y
p
e
'
]
[
$
v
D
e
e
t
s
[
1
]
]
[
'
i
d
'
]
 
=
 
$
v
D
e
e
t
s
[
1
]
;

	
	
	
	
	
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
g
u
e
s
t
t
y
p
e
N
a
m
e
s
[
$
v
D
e
e
t
s
[
1
]
]
)
)
 
{

	
	
	
	
	
	
 
$
g
u
e
s
t
t
y
p
e
N
a
m
e
s
[
$
v
D
e
e
t
s
[
1
]
]
 
=
 
'
U
n
k
n
o
w
n
'
;

	
	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
t
y
p
e
'
]
[
$
v
D
e
e
t
s
[
1
]
]
[
'
t
i
t
l
e
'
]
 
=
 
$
g
u
e
s
t
t
y
p
e
N
a
m
e
s
[
$
v
D
e
e
t
s
[
1
]
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
t
y
p
e
'
]
[
$
v
D
e
e
t
s
[
1
]
]
[
'
q
t
y
'
]
 
=
 
$
v
D
e
e
t
s
[
2
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
t
y
p
e
'
]
[
$
v
D
e
e
t
s
[
1
]
]
[
'
v
a
l
u
e
'
]
 
=
 
$
v
D
e
e
t
s
[
3
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
g
u
e
s
t
t
y
p
e
'
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


 
 
 
 
 
 
 
 
/
/
o
p
t
i
o
n
a
l
 
e
x
t
r
a
s

 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
_
r
o
w
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
e
x
t
r
a
O
p
t
i
o
n
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
e
x
t
r
a
s
'
]
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
e
x
t
r
a
O
p
t
i
o
n
s
A
r
r
a
y
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
e
x
t
r
a
O
p
t
i
o
n
s
A
r
r
a
y
 
a
s
 
$
k
 
=
>
 
$
v
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
v
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
e
x
t
r
a
O
p
t
i
o
n
s
A
r
r
a
y
[
$
k
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
e
x
t
r
a
O
p
t
i
o
n
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 

	
	
	
	
	
	
	
	
u
i
d
,
 

	
	
	
	
	
	
	
	
n
a
m
e
,

	
	
	
	
	
	
	
	
p
r
i
c
e
,

	
	
	
	
	
	
	
	
t
a
x
_
r
a
t
e
 

	
	
	
	
	
	
	
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
e
x
t
r
a
s
 

	
	
	
	
	
	
	
W
H
E
R
E
 
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
 
'
"
 
.
(
i
n
t
)
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
.
"
'
 
A
N
D
 
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
e
x
t
r
a
O
p
t
i
o
n
s
A
r
r
a
y
)
.
'
)
 

	
	
	
	
	
	
	
O
R
D
E
R
 
B
Y
 
n
a
m
e
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
L
i
s
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


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
e
x
t
r
a
s
L
i
s
t
 
a
s
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
d
e
e
t
s
'
]
[
$
e
-
>
u
i
d
]
[
'
u
i
d
'
]
 
=
 
$
e
-
>
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
d
e
e
t
s
'
]
[
$
e
-
>
u
i
d
]
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
e
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
d
e
e
t
s
'
]
[
$
e
-
>
u
i
d
]
[
'
p
r
i
c
e
'
]
 
=
 
$
e
-
>
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
d
e
e
t
s
'
]
[
$
e
-
>
u
i
d
]
[
'
t
a
x
_
r
a
t
e
'
]
 
=
 
$
e
-
>
t
a
x
_
r
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
d
e
e
t
s
'
]
[
$
e
-
>
u
i
d
]
[
'
q
t
y
'
]
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
c
o
n
t
r
a
c
t
d
e
e
t
s
'
]
[
'
e
x
t
r
a
s
q
u
a
n
t
i
t
i
e
s
'
]
[
$
e
-
>
u
i
d
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
e
x
t
r
a
d
e
e
t
s
'
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


 
 
 
 
 
 
 
 
/
/
b
o
o
k
i
n
g
 
n
o
t
e
s

 
 
 
 
 
 
 
 
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
 

	
	
	
	
	
	
i
d
,

	
	
	
	
	
	
t
i
m
e
s
t
a
m
p
,

	
	
	
	
	
	
n
o
t
e
 

	
	
	
	
	
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
c
o
m
p
_
n
o
t
e
s
 

	
	
	
	
	
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
 
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
A
N
D
 
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
 
'
"
.
(
i
n
t
)
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
.
"
'
"
;

 
 
 
 
 
 
 
 
$
n
o
t
e
s
D
a
t
a
 
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
n
o
t
e
s
D
a
t
a
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
n
o
t
e
s
D
a
t
a
 
a
s
 
$
n
o
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
n
o
t
e
d
e
e
t
s
'
]
[
$
n
o
t
e
-
>
i
d
]
[
'
i
d
'
]
 
=
 
$
n
o
t
e
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
n
o
t
e
d
e
e
t
s
'
]
[
$
n
o
t
e
-
>
i
d
]
[
'
t
i
m
e
s
t
a
m
p
'
]
 
=
 
$
n
o
t
e
-
>
t
i
m
e
s
t
a
m
p
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
n
o
t
e
d
e
e
t
s
'
]
[
$
n
o
t
e
-
>
i
d
]
[
'
n
o
t
e
'
]
 
=
 
$
n
o
t
e
-
>
n
o
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
c
o
n
t
r
a
c
t
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
n
o
t
e
d
e
e
t
s
'
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

