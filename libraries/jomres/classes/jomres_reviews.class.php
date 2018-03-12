
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
O
r
i
g
i
n
a
l
l
y
 
b
a
s
e
d
 
o
n
 
X
o
r
i
a
n
t
 
R
e
v
i
e
w
s
 
b
y
 
M
a
n
i
s
h
 
K
h
a
n
c
h
a
n
d
a
n
i
 
h
t
t
p
:
/
/
w
w
w
.
p
h
p
c
l
a
s
s
e
s
.
o
r
g
/
b
r
o
w
s
e
/
p
a
c
k
a
g
e
/
5
5
4
2
.
h
t
m
l
,
 
i
t
'
s
 
b
e
e
n
 
h
u
g
e
l
y
 
r
e
w
r
i
t
t
e
n
 
f
o
r
 
u
s
e
 
i
n
 
J
o
m
r
e
s
.


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


c
l
a
s
s
 
j
o
m
r
e
s
_
r
e
v
i
e
w
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
i
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
d
b
_
p
r
e
f
i
x
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
d
b
p
r
e
f
i
x
'
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
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
i
p
 
=
 
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
c
e
s
s
S
t
r
i
n
g
(
$
_
S
E
R
V
E
R
[
 
'
R
E
M
O
T
E
_
A
D
D
R
'
 
]
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
s
e
r
i
d
 
=
 
$
t
h
i
s
J
R
U
s
e
r
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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
v
i
e
w
_
f
i
e
l
d
s
_
n
o
t
e
 
=
 
"
F
i
e
l
d
 
1
 
H
o
s
p
i
t
a
l
i
t
y
 
,
 
F
i
e
l
d
 
2
 
L
o
c
a
t
i
o
n
 
,
 
F
i
e
l
d
 
3
 
C
l
e
a
n
l
i
n
e
s
s
 
,
 
F
i
e
l
d
 
4
 
A
c
c
o
m
m
o
d
a
t
i
o
n
 
,
 
F
i
e
l
d
 
5
 
V
a
l
u
e
 
f
o
r
 
m
o
n
e
y
 
,
 
F
i
e
l
d
 
6
 
S
e
r
v
i
c
e
s
 
"
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
 
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
p
o
r
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
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
 
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
$
c
a
n
_
p
o
s
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
t
e
s
t
 
m
o
d
e
 
a
l
l
o
w
s
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
t
o
 
m
a
k
e
 
r
e
v
i
e
w
s
 
w
h
e
r
e
 
n
o
r
m
a
l
l
y
 
t
h
e
y
 
w
o
u
l
d
n
'
t
 
b
e
 
a
l
l
o
w
e
d
 
t
o
.

 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
r
e
v
i
e
w
s
_
t
e
s
t
_
m
o
d
e
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
n
_
p
o
s
t
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
n
_
p
o
s
t
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
c
a
n
_
p
o
s
t
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
 
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
_
t
h
i
s
_
p
r
o
p
e
r
t
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
t
e
s
t
 
m
o
d
e
 
a
l
l
o
w
s
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
t
o
 
m
a
k
e
 
r
e
v
i
e
w
s
 
w
h
e
r
e
 
n
o
r
m
a
l
l
y
 
t
h
e
y
 
w
o
u
l
d
n
'
t
 
b
e
 
a
l
l
o
w
e
d
 
t
o
.

 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
r
e
v
i
e
w
s
_
t
e
s
t
_
m
o
d
e
'
 
]
 
=
=
 
'
1
'
 
&
&
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
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
 
0
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

 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
R
e
g
i
s
t
e
r
e
d
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

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
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


 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
o
n
l
y
_
g
u
e
s
t
s
_
c
a
n
_
r
e
v
i
e
w
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
q
l
 
=
 
'
S
E
L
E
C
T
 
c
o
u
n
t
(
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
)
 
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
g
u
e
s
t
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
.
(
i
n
t
)
 
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
.
'
 
a
n
d
 
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
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
u
s
e
r
i
d
.
'
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
c
o
u
n
t
 
=
 
(
i
n
t
)
 
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
s
q
l
,
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
g
u
e
s
t
c
o
u
n
t
 
!
=
 
1
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
s
q
l
 
=
 
'
S
E
L
E
C
T
 
c
o
u
n
t
(
r
a
t
i
n
g
_
i
d
)
 
a
s
 
c
n
t
1
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
i
t
e
m
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
.
"
 
a
n
d
 
r
a
t
i
n
g
_
i
p
 
=
 
'
"
.
$
t
h
i
s
-
>
i
p
.
"
'
 
"
;

 
 
 
 
 
 
 
 
$
s
q
l
 
.
=
 
'
U
N
I
O
N
 
S
E
L
E
C
T
 
c
o
u
n
t
(
r
a
t
i
n
g
_
i
d
)
 
a
s
 
c
n
t
2
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
i
t
e
m
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
.
'
 
a
n
d
 
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
t
h
i
s
-
>
u
s
e
r
i
d
.
'
 
'
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
s
q
l
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
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
s
a
v
e
_
c
o
n
f
i
r
m
a
t
i
o
n
(
$
r
a
t
i
n
g
_
i
d
,
 
$
s
t
a
t
e
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
 
=
 
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
_
f
o
r
_
r
a
t
i
n
g
_
i
d
(
$
r
a
t
i
n
g
_
i
d
)
;

 
 
 
 
 
 
 
 
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
 
&
&
 
$
r
a
t
i
n
g
_
i
d
 
>
 
0
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
I
N
S
E
R
T
 
I
N
T
O
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
c
o
n
f
i
r
m
 
S
E
T

	
	
	
	
`
i
t
e
m
_
i
d
`
 
=
 
'
 
.
(
i
n
t
)
 
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
.
'
,

	
	
	
	
`
r
a
t
i
n
g
_
i
d
`
=
'
 
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
,

	
	
	
	
`
c
o
n
f
i
r
m
_
u
s
e
r
_
i
d
`
=
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
u
s
e
r
i
d
.
'
,

	
	
	
	
`
c
o
n
f
i
r
m
`
=
'
 
.
(
i
n
t
)
 
$
s
t
a
t
e
.
"
,

	
	
	
	
`
c
o
n
f
i
r
m
_
i
p
`
=
'
"
 
.
$
t
h
i
s
-
>
i
p
.
"
'
,

	
	
	
	
`
c
o
n
f
i
r
m
_
d
a
t
e
`
=
'
"
 
.
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
.
"
'

	
	
	
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
I
n
s
e
r
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
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
s
a
v
e
_
r
e
v
i
e
w
(
$
r
a
t
i
n
g
,
 
$
t
i
t
l
e
,
 
$
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
 
$
p
r
o
s
,
 
$
c
o
n
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


	
	
$
t
e
s
t
_
m
o
d
e
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
r
e
v
i
e
w
s
_
t
e
s
t
_
m
o
d
e
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
$
t
e
s
t
_
m
o
d
e
 
=
 
t
r
u
e
;

	
	
}


	
	
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
_
P
O
S
T
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
 
)
 
&
&
 
!
$
t
e
s
t
_
m
o
d
e
 
)
 
{

	
	
	
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
 
(
i
n
t
)
$
_
P
O
S
T
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
;

	
	
	
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
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
g
u
e
s
t
s
 
W
H
E
R
E
 
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
t
h
i
s
J
R
U
s
e
r
-
>
i
d
.
"
'
 
"
;

	
	
	
$
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

	
	
	
$
a
l
l
G
u
e
s
t
U
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
 
B
e
c
a
u
s
e
 
a
 
n
e
w
 
r
e
c
o
r
d
 
i
s
 
m
a
d
e
 
i
n
 
t
h
e
 
g
u
e
s
t
s
 
t
a
b
l
e
 
f
o
r
 
e
a
c
h
 
n
e
w
 
p
r
o
p
e
r
t
y
 
t
h
e
 
g
u
e
s
t
 
r
e
g
i
s
t
e
r
s
 
i
n
,
 
w
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
a
l
l
 
t
h
e
 
g
u
e
s
t
 
u
i
d
s
 
f
o
r
 
t
h
i
s
 
u
s
e
r

	
	
	
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
s
_
u
i
d
s
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
s
 
a
s
 
$
g
)
 
{

	
	
	
	
	
$
a
l
l
G
u
e
s
t
U
i
d
s
[
 
]
 
=
 
$
g
-
>
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
;

	
	
	
	
}

	
	
	
}

	
	
	

	
	
	
$
g
u
e
s
t
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
 
W
H
E
R
E
 
g
u
e
s
t
_
u
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
a
l
l
G
u
e
s
t
U
i
d
s
)
.
'
)
 
A
N
D
 
c
a
n
c
e
l
l
e
d
 
=
 
0
 
O
R
D
E
R
 
B
Y
 
t
a
g
'
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
s
_
d
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
c
o
n
t
r
a
c
t
s
_
d
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
c
o
n
t
r
a
c
t
s
_
d
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

	
	
	
	
	
$
g
u
e
s
t
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
[
]
 
=
 
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

	
	
	
	
}

	
	
	
}


	
	
	
i
f
 
(
!
i
n
_
a
r
r
a
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
_
u
i
d
 
,
 
$
g
u
e
s
t
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
 
)
 
)
 
{
 
/
/
 
F
i
s
h
y
,
 
t
h
e
 
c
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
 
p
a
s
s
e
d
 
d
o
e
s
n
'
t
 
m
a
t
c
h
 
a
n
y
 
o
f
 
t
h
e
 
g
u
e
s
t
'
s
 
c
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
s
.
 

	
	
	
	
r
e
t
u
r
n
;

	
	
	
}

	
	
}

	
	

 
 
 
 
 
 
 
 
$
p
u
b
l
i
s
h
e
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
a
u
t
o
p
u
b
l
i
s
h
_
r
e
v
i
e
w
s
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
u
b
l
i
s
h
e
d
 
=
 
1
;

 
 
 
 
 
 
 
 
}

	
	

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
S
E
T

	
	
	
u
s
e
r
_
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
t
h
i
s
-
>
u
s
e
r
i
d
.
"
'
,

	
	
	
i
t
e
m
_
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
.
"
'
,

	
	
	
r
a
t
i
n
g
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
r
a
t
i
n
g
.
"
'
,

	
	
	
r
a
t
i
n
g
_
i
p
=
'
"
 
.
$
t
h
i
s
-
>
i
p
.
"
'
,

	
	
	
r
a
t
i
n
g
_
d
a
t
e
=
'
"
 
.
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
.
"
'
,

	
	
	
r
e
v
i
e
w
_
t
i
t
l
e
=
'
"
 
.
t
r
i
m
(
$
t
i
t
l
e
)
.
"
'
,

	
	
	
r
e
v
i
e
w
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
=
'
"
 
.
t
r
i
m
(
$
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
)
.
"
'
,

	
	
	
p
r
o
s
=
'
"
 
.
t
r
i
m
(
$
p
r
o
s
)
.
"
'
,

	
	
	
c
o
n
s
=
'
"
 
.
t
r
i
m
(
$
c
o
n
s
)
.
"
'
,

	
	
	
p
u
b
l
i
s
h
e
d
 
=
 
"
 
.
$
p
u
b
l
i
s
h
e
d
.
"
,

	
	
	
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
>
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
r
e
v
i
e
w
_
s
a
v
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
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
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
r
e
v
i
e
w
 
i
s
 
a
d
d
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
r
e
v
i
e
w
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
s
a
v
e
_
r
e
v
i
e
w
_
r
e
p
o
r
t
(
$
r
a
t
i
n
g
_
i
d
,
 
$
r
e
p
o
r
t
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
I
N
S
E
R
T
 
I
N
T
O
 
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
e
v
i
e
w
s
_
r
e
p
o
r
t
s
 
S
E
T

	
	
	
`
r
a
t
i
n
g
_
i
d
`
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
r
a
t
i
n
g
_
i
d
.
"
'
,

	
	
	
`
u
s
e
r
_
i
d
`
=
"
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
u
s
e
r
i
d
.
"
,

	
	
	
`
r
e
p
o
r
t
`
=
'
"
 
.
(
s
t
r
i
n
g
)
 
$
r
e
p
o
r
t
.
"
'
,

	
	
	
`
r
e
p
o
r
t
_
d
a
t
e
`
=
'
"
 
.
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
.
"
'

	
	
	
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
d
e
l
e
t
e
_
r
e
v
i
e
w
(
$
r
a
t
i
n
g
_
i
d
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
r
a
t
i
n
g
_
i
d
 
>
 
0
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
D
E
L
E
T
E
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
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
i
n
g
_
i
d
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
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
D
E
L
E
T
E
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
c
o
n
f
i
r
m
 
W
H
E
R
E
 
`
r
a
t
i
n
g
_
i
d
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
r
e
p
o
r
t
s
 
=
 
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
a
l
l
_
r
e
p
o
r
t
s
_
i
n
d
e
x
_
b
y
_
r
a
t
i
n
g
_
i
d
(
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
a
l
l
_
r
e
p
o
r
t
s
[
 
$
r
a
t
i
n
g
_
i
d
 
]
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
D
E
L
E
T
E
 
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
e
v
i
e
w
s
_
r
e
p
o
r
t
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
i
n
g
_
i
d
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
 
W
H
E
R
E
 
`
r
a
t
i
n
g
_
i
d
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
r
e
v
i
e
w
_
d
e
l
e
t
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
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
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
r
e
v
i
e
w
 
i
s
 
a
d
d
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
r
e
v
i
e
w
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
r
a
t
i
n
g
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
p
u
b
l
i
s
h
_
r
e
v
i
e
w
(
$
r
a
t
i
n
g
_
i
d
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
U
P
D
A
T
E
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
S
E
T
 
p
u
b
l
i
s
h
e
d
 
=
 
1
 
W
H
E
R
E
 
r
a
t
i
n
g
_
i
d
 
=
 
'
.
$
r
a
t
i
n
g
_
i
d
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
r
e
v
i
e
w
_
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
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
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
r
e
v
i
e
w
 
i
s
 
a
d
d
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
r
e
v
i
e
w
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
r
a
t
i
n
g
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
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
 
u
n
p
u
b
l
i
s
h
_
r
e
v
i
e
w
(
$
r
a
t
i
n
g
_
i
d
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
U
P
D
A
T
E
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
S
E
T
 
p
u
b
l
i
s
h
e
d
 
=
 
0
 
W
H
E
R
E
 
r
a
t
i
n
g
_
i
d
 
=
 
'
.
$
r
a
t
i
n
g
_
i
d
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
r
e
v
i
e
w
_
u
n
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
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
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
 
r
e
v
i
e
w
 
i
s
 
a
d
d
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
r
e
v
i
e
w
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
r
a
t
i
n
g
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
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


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
p
r
o
c
e
s
s
S
t
r
i
n
g
(
$
t
e
x
t
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
d
d
s
l
a
s
h
e
s
(
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
t
r
i
m
(
$
t
e
x
t
)
)
)
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
e
t
_
a
l
l
_
r
e
v
i
e
w
s
_
i
n
d
e
x
_
b
y
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
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
v
i
e
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
 
*
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
O
R
D
E
R
 
B
Y
 
r
a
t
i
n
g
_
d
a
t
e
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
D
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
r
e
s
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
 
=
 
$
r
e
s
-
>
i
t
e
m
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
=
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
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
 
]
 
=
 
$
r
e
s
-
>
i
t
e
m
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
'
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
r
e
s
-
>
u
s
e
r
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
'
r
e
v
i
e
w
_
t
i
t
l
e
'
 
]
 
=
 
$
r
e
s
-
>
r
e
v
i
e
w
_
t
i
t
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
'
r
e
v
i
e
w
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
r
e
s
-
>
r
e
v
i
e
w
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
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
'
p
r
o
s
'
 
]
 
=
 
$
r
e
s
-
>
p
r
o
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
'
c
o
n
s
'
 
]
 
=
 
$
r
e
s
-
>
c
o
n
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
'
r
a
t
i
n
g
'
 
]
 
=
 
$
r
e
s
-
>
r
a
t
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
'
r
a
t
i
n
g
_
i
p
'
 
]
 
=
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
p
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
'
r
a
t
i
n
g
_
d
a
t
e
'
 
]
 
=
 
$
r
e
s
-
>
r
a
t
i
n
g
_
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
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
[
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
 
]
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
r
e
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
v
i
e
w
s
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
 
v
a
l
i
d
a
t
e
D
a
t
a
(
$
r
e
c
o
r
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
r
e
c
o
r
d
[
 
'
r
a
t
i
n
g
'
 
]
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
R
a
t
i
n
g
 
i
s
 
e
m
p
t
y
.
 
'
)
;

 
 
 
 
 
 
 
 
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
r
e
c
o
r
d
[
 
'
r
e
v
i
e
w
_
t
i
t
l
e
'
 
]
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
R
a
t
i
n
g
 
T
i
t
l
e
 
i
s
 
e
m
p
t
y
.
 
'
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
 
c
h
e
c
k
R
a
t
i
n
g
U
n
i
q
u
e
I
p
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
q
l
 
=
 
'
S
E
L
E
C
T
 
c
o
u
n
t
(
*
)
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
i
t
e
m
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
.
"
 
a
n
d
 
r
a
t
i
n
g
_
i
p
 
=
 
'
"
.
$
t
h
i
s
-
>
i
p
.
"
'
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
s
q
l
,
 
1
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
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
 
c
h
e
c
k
R
a
t
i
n
g
U
n
i
q
u
e
U
s
e
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
q
l
 
=
 
'
S
E
L
E
C
T
 
c
o
u
n
t
(
*
)
 
a
s
 
c
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
i
t
e
m
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
.
'
 
a
n
d
 
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
t
h
i
s
-
>
u
s
e
r
i
d
.
'
 
'
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
s
q
l
,
 
1
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
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
 
c
h
e
c
k
C
o
n
f
i
r
m
U
n
i
q
u
e
I
p
(
$
r
a
t
i
n
g
_
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
q
l
 
=
 
'
S
E
L
E
C
T
 
c
o
u
n
t
(
*
)
 
a
s
 
c
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
c
o
n
f
i
r
m
 
W
H
E
R
E
 
i
t
e
m
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
.
"
 
a
n
d
 
c
o
n
f
i
r
m
_
i
p
 
=
 
'
"
.
$
t
h
i
s
-
>
i
p
.
"
'
 
a
n
d
 
r
a
t
i
n
g
_
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
r
a
t
i
n
g
_
i
d
.
"
'
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
s
q
l
,
 
1
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
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
 
c
h
e
c
k
C
o
n
f
i
r
m
U
n
i
q
u
e
U
s
e
r
(
$
r
a
t
i
n
g
_
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
q
l
 
=
 
'
S
E
L
E
C
T
 
c
o
u
n
t
(
*
)
 
a
s
 
c
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
c
o
n
f
i
r
m
 
W
H
E
R
E
 
i
t
e
m
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
.
'
 
a
n
d
 
c
o
n
f
i
r
m
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
$
t
h
i
s
-
>
u
s
e
r
i
d
.
'
 
a
n
d
 
r
a
t
i
n
g
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
r
a
t
i
n
g
_
i
d
.
'
 
'
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
s
q
l
,
 
1
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
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
e
t
R
a
t
i
n
g
s
M
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
e
s
u
l
t
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
e
s
u
l
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

 
 
 
 
 
 
 
 
$
s
q
l
 
=
 
'
S
E
L
E
C
T
 
i
t
e
m
_
i
d
,
 
A
V
G
(
r
a
t
i
n
g
)
 
a
s
 
a
v
g
_
r
a
t
i
n
g
,
 
C
O
U
N
T
(
r
a
t
i
n
g
)
 
a
s
 
c
o
u
n
t
e
r
,
 
S
U
M
(
r
a
t
i
n
g
)
 
a
s
 
s
u
m
r
a
t
i
n
g
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
i
t
e
m
_
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
'
)
 
A
N
D
 
p
u
b
l
i
s
h
e
d
 
=
 
1
 
G
R
O
U
P
 
B
Y
 
i
t
e
m
_
i
d
'
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
s
q
l
)
;

 
 
 
 
 
 
 
 
$
a
r
r
 
=
 
a
r
r
a
y
(
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
r
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
$
r
e
s
-
>
i
t
e
m
_
i
d
 
]
[
 
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
 
]
 
=
 
$
r
e
s
-
>
i
t
e
m
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
$
r
e
s
-
>
i
t
e
m
_
i
d
 
]
[
 
'
a
v
g
_
r
a
t
i
n
g
'
 
]
 
=
 
$
r
e
s
-
>
a
v
g
_
r
a
t
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
$
r
e
s
-
>
i
t
e
m
_
i
d
 
]
[
 
'
c
o
u
n
t
e
r
'
 
]
 
=
 
$
r
e
s
-
>
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
$
r
e
s
-
>
i
t
e
m
_
i
d
 
]
[
 
'
s
u
m
r
a
t
i
n
g
'
 
]
 
=
 
$
r
e
s
-
>
s
u
m
r
a
t
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
a
r
r
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
e
s
u
l
t
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
 
=
 
$
a
r
r
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
e
s
u
l
t
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
[
 
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
 
]
 
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
e
s
u
l
t
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
[
 
'
a
v
g
_
r
a
t
i
n
g
'
 
]
 
=
 
0
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
e
s
u
l
t
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
[
 
'
c
o
u
n
t
e
r
'
 
]
 
=
 
0
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
e
s
u
l
t
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
[
 
'
s
u
m
r
a
t
i
n
g
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
s
h
o
w
R
a
t
i
n
g
(
$
i
t
e
m
_
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
e
s
u
l
t
[
 
$
i
t
e
m
_
i
d
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
 
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
s
q
l
 
=
 
'
S
E
L
E
C
T
 
i
t
e
m
_
i
d
,
 
A
V
G
(
r
a
t
i
n
g
)
 
a
s
 
a
v
g
_
r
a
t
i
n
g
,
 
C
O
U
N
T
(
r
a
t
i
n
g
)
 
a
s
 
c
o
u
n
t
e
r
,
 
S
U
M
(
r
a
t
i
n
g
)
 
a
s
 
s
u
m
r
a
t
i
n
g
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
i
t
e
m
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
.
'
 
A
N
D
 
p
u
b
l
i
s
h
e
d
 
=
 
1
 
G
R
O
U
P
 
B
Y
 
i
t
e
m
_
i
d
'
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
s
q
l
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
r
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
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
 
]
 
=
 
$
r
e
s
-
>
i
t
e
m
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
'
a
v
g
_
r
a
t
i
n
g
'
 
]
 
=
 
$
r
e
s
-
>
a
v
g
_
r
a
t
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
'
c
o
u
n
t
e
r
'
 
]
 
=
 
$
r
e
s
-
>
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
'
s
u
m
r
a
t
i
n
g
'
 
]
 
=
 
$
r
e
s
-
>
s
u
m
r
a
t
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
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
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
'
a
v
g
_
r
a
t
i
n
g
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
'
c
o
u
n
t
e
r
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
'
s
u
m
r
a
t
i
n
g
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
 
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
e
s
u
l
t
[
 
$
i
t
e
m
_
i
d
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
a
r
r
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
 
s
h
o
w
R
e
v
i
e
w
s
(
$
i
t
e
m
_
i
d
,
 
$
m
a
x
 
=
 
-
1
,
 
$
p
a
g
e
N
u
m
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
t
u
r
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
c
o
n
f
i
r
m
 
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
a
r
r
 
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
s
q
l
 
=
 
'
S
E
L
E
C
T
 
i
t
e
m
_
i
d
,
 
r
a
t
i
n
g
_
i
d
,
 
A
V
G
(
c
o
n
f
i
r
m
)
 
a
s
 
a
v
g
_
r
a
t
i
n
g
,
 
C
O
U
N
T
(
c
o
n
f
i
r
m
)
 
a
s
 
c
o
u
n
t
e
r
,
 
S
U
M
(
c
o
n
f
i
r
m
)
 
a
s
 
t
o
t
a
l
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
c
o
n
f
i
r
m
 
W
H
E
R
E
 
i
t
e
m
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
.
'
 
G
R
O
U
P
 
B
Y
 
r
a
t
i
n
g
_
i
d
'
;

 
 
 
 
 
 
 
 
$
r
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
s
q
l
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
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
r
m
[
 
$
r
-
>
r
a
t
i
n
g
_
i
d
 
]
 
=
 
$
r
-
>
r
a
t
i
n
g
_
i
d
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
d
e
t
a
i
l
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
s
q
l
 
=
 
'
S
E
L
E
C
T
 
r
a
t
i
n
g
_
i
d
,
 
d
e
t
a
i
l
_
r
a
t
i
n
g
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
 
W
H
E
R
E
 
`
i
t
e
m
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
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
.
'
 
'
;

 
 
 
 
 
 
 
 
$
r
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
s
q
l
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
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
d
e
t
a
i
l
s
[
 
$
r
-
>
r
a
t
i
n
g
_
i
d
 
]
[
 
]
 
=
 
$
r
-
>
d
e
t
a
i
l
_
r
a
t
i
n
g
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
m
a
x
 
=
=
 
'
-
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
q
l
 
=
 
'
S
E
L
E
C
T
 
*
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
i
t
e
m
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
.
'
 
A
N
D
 
p
u
b
l
i
s
h
e
d
 
=
 
1
 
o
r
d
e
r
 
b
y
 
r
a
t
i
n
g
_
d
a
t
e
 
d
e
s
c
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
s
q
l
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
[
 
'
t
o
t
a
l
R
o
w
s
'
 
]
 
=
 
c
o
u
n
t
(
$
r
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
[
 
'
m
a
x
'
 
]
 
=
 
$
m
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
[
 
'
p
a
g
e
N
u
m
'
 
]
 
=
 
$
p
a
g
e
N
u
m
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
t
R
o
w
 
=
 
$
p
a
g
e
N
u
m
 
*
 
$
m
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
[
 
'
s
t
a
r
t
R
o
w
'
 
]
 
=
 
$
s
t
a
r
t
R
o
w
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
t
a
l
P
a
g
e
s
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
[
 
'
t
o
t
a
l
P
a
g
e
s
'
 
]
 
=
 
$
t
o
t
a
l
P
a
g
e
s
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
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
 
=
 
a
r
r
a
y
(
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
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
$
k
e
y
 
]
 
=
 
$
v
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
i
d
 
=
 
$
r
-
>
r
a
t
i
n
g
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
[
 
'
f
i
e
l
d
s
'
 
]
[
 
$
a
r
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
]
 
=
 
$
a
r
r
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
c
o
n
f
i
r
m
[
 
$
a
r
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
[
 
'
c
o
n
f
i
r
m
'
 
]
[
 
$
a
r
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
]
 
=
 
$
c
o
n
f
i
r
m
[
 
$
a
r
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
[
 
'
c
o
n
f
i
r
m
'
 
]
[
 
$
a
r
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
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


 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
t
u
r
n
[
 
'
r
a
t
i
n
g
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
[
 
$
a
r
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
]
 
=
 
$
r
a
t
i
n
g
_
d
e
t
a
i
l
s
[
 
$
a
r
r
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
t
u
r
n
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
 
s
h
o
w
C
o
n
f
i
r
m
(
$
r
a
t
i
n
g
_
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
a
r
r
 
=
 
a
r
r
a
y
(
'
a
g
r
e
e
'
 
=
>
 
0
,
 
'
d
i
s
a
g
r
e
e
'
 
=
>
 
0
,
 
'
c
o
n
f
i
r
m
_
i
p
s
'
 
=
>
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
$
s
q
l
 
=
 
'
S
E
L
E
C
T
 
c
o
n
f
i
r
m
,
c
o
n
f
i
r
m
_
i
p
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
c
o
n
f
i
r
m
 
W
H
E
R
E
 
i
t
e
m
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
.
'
 
a
n
d
 
r
a
t
i
n
g
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
r
a
t
i
n
g
_
i
d
.
'
 
'
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
s
q
l
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
e
s
u
l
t
 
a
s
 
$
r
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
'
c
o
n
f
i
r
m
_
i
p
s
'
 
]
[
 
]
 
=
 
$
r
e
s
-
>
c
o
n
f
i
r
m
_
i
p
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
r
e
s
-
>
c
o
n
f
i
r
m
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
'
a
g
r
e
e
'
 
]
+
+
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
[
 
'
d
i
s
a
g
r
e
e
'
 
]
+
+
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
a
r
r
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
e
t
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
_
f
o
r
_
r
a
t
i
n
g
_
i
d
(
$
r
a
t
i
n
g
_
i
d
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
 
i
t
e
m
_
i
d
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
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
i
n
g
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
 
L
I
M
I
T
 
1
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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
,
 
1
)
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
e
t
_
a
l
l
_
r
e
p
o
r
t
s
_
i
n
d
e
x
_
b
y
_
r
a
t
i
n
g
_
i
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
p
o
r
t
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
 
*
 
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
e
v
i
e
w
s
_
r
e
p
o
r
t
s
'
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
r
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
i
d
 
=
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
p
o
r
t
s
[
 
$
r
a
t
i
n
g
_
i
d
 
]
[
 
$
r
e
s
-
>
r
e
p
o
r
t
_
i
d
 
]
[
 
'
r
e
p
o
r
t
_
i
d
'
 
]
 
=
 
$
r
e
s
-
>
r
e
p
o
r
t
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
p
o
r
t
s
[
 
$
r
a
t
i
n
g
_
i
d
 
]
[
 
$
r
e
s
-
>
r
e
p
o
r
t
_
i
d
 
]
[
 
'
r
a
t
i
n
g
_
i
d
'
 
]
 
=
 
$
r
e
s
-
>
r
a
t
i
n
g
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
p
o
r
t
s
[
 
$
r
a
t
i
n
g
_
i
d
 
]
[
 
$
r
e
s
-
>
r
e
p
o
r
t
_
i
d
 
]
[
 
'
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
r
e
s
-
>
u
s
e
r
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
p
o
r
t
s
[
 
$
r
a
t
i
n
g
_
i
d
 
]
[
 
$
r
e
s
-
>
r
e
p
o
r
t
_
i
d
 
]
[
 
'
r
e
p
o
r
t
'
 
]
 
=
 
$
r
e
s
-
>
r
e
p
o
r
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
p
o
r
t
s
[
 
$
r
a
t
i
n
g
_
i
d
 
]
[
 
$
r
e
s
-
>
r
e
p
o
r
t
_
i
d
 
]
[
 
'
r
e
p
o
r
t
_
d
a
t
e
'
 
]
 
=
 
$
r
e
s
-
>
r
e
p
o
r
t
_
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
p
o
r
t
s
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
 
s
a
v
e
_
r
a
t
i
n
g
_
d
e
t
a
i
l
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
,
 
$
r
a
t
i
n
g
_
i
d
,
 
$
r
a
t
i
n
g
_
1
,
 
$
r
a
t
i
n
g
_
2
,
 
$
r
a
t
i
n
g
_
3
,
 
$
r
a
t
i
n
g
_
4
,
 
$
r
a
t
i
n
g
_
5
,
 
$
r
a
t
i
n
g
_
6
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
I
N
S
E
R
T
 
I
N
T
O
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
 
S
E
T
 
`
i
t
e
m
_
i
d
`
=
'
.
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
.
'
,
 
`
r
a
t
i
n
g
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
,
`
d
e
t
a
i
l
_
r
a
t
i
n
g
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
1
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
 
S
E
T
 
`
i
t
e
m
_
i
d
`
=
'
.
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
.
'
,
`
r
a
t
i
n
g
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
,
`
d
e
t
a
i
l
_
r
a
t
i
n
g
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
2
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
 
S
E
T
 
`
i
t
e
m
_
i
d
`
=
'
.
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
.
'
,
`
r
a
t
i
n
g
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
,
`
d
e
t
a
i
l
_
r
a
t
i
n
g
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
3
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
 
S
E
T
 
`
i
t
e
m
_
i
d
`
=
'
.
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
.
'
,
`
r
a
t
i
n
g
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
,
`
d
e
t
a
i
l
_
r
a
t
i
n
g
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
4
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
 
S
E
T
 
`
i
t
e
m
_
i
d
`
=
'
.
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
.
'
,
`
r
a
t
i
n
g
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
,
`
d
e
t
a
i
l
_
r
a
t
i
n
g
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
5
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
_
d
e
t
a
i
l
 
S
E
T
 
`
i
t
e
m
_
i
d
`
=
'
.
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
.
'
,
`
r
a
t
i
n
g
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
i
d
.
'
,
`
d
e
t
a
i
l
_
r
a
t
i
n
g
`
=
'
.
(
i
n
t
)
 
$
r
a
t
i
n
g
_
6
.
'
'
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
I
n
s
e
r
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
,
 
'
'
)
;

 
 
 
 
}


 
 
 
 
/
/
 
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
h
i
g
h
e
s
t
_
r
a
t
e
d
_
a
n
d
_
r
a
t
i
n
g
s
(
$
l
i
m
i
t
)

 
 
 
 
/
/
 
{

 
 
 
 
/
/
 
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
 
*
 
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
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
O
R
D
E
R
 
B
Y
 
i
t
e
m
_
i
d
"
;

 
 
 
 
/
/
 
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

 
 
 
 
/
/
 
i
f
 
(
c
o
u
n
t
(
$
r
e
s
u
l
t
)
>
0
)

 
 
 
 
/
/
 
{

 
 
 
 
/
/
 
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
e
s
)

 
 
 
 
/
/
 
{


 
 
 
 
/
/
 
}

 
 
 
 
/
/
 
}

 
 
 
 
/
/
 
e
l
s
e

 
 
 
 
/
/
 
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

 
 
 
 
/
/
 
}

}

