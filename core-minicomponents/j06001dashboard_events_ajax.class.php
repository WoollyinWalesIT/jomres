
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
 
j
0
6
0
0
1
d
a
s
h
b
o
a
r
d
_
e
v
e
n
t
s
_
a
j
a
x

{

 
 
 
 
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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
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
e
t
V
a
l
s
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 
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
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
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
,
 
0
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
 
=
=
 
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
 
=
 
g
e
t
D
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
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
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
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
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
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
(
b
o
o
l
)
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
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

 
 
 
 
 
 
 
 
$
g
u
e
s
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


 
 
 
 
 
 
 
 
$
i
m
g
_
p
e
n
d
i
n
g
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
g
r
e
y
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
a
r
r
i
v
e
t
o
d
a
y
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
o
r
a
n
g
e
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
r
e
s
i
d
e
n
t
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
g
r
e
e
n
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
d
e
p
a
r
t
t
o
d
a
y
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
b
l
u
e
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
s
t
i
l
l
h
e
r
e
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
p
u
r
p
l
e
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
l
a
t
e
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
r
e
d
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
b
o
o
k
e
d
o
u
t
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
t
e
a
l
'
;

 
 
 
 
 
 
 
 
$
i
m
g
_
b
l
a
c
k
 
=
 
'
l
a
b
e
l
 
l
a
b
e
l
-
b
l
a
c
k
'
;


 
 
 
 
 
 
 
 
$
f
r
o
m
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
s
t
a
r
t
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
t
o
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
G
E
T
,
 
'
e
n
d
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
$
f
r
o
m
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
f
r
o
m
)
)
;

 
 
 
 
 
 
 
 
$
t
o
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
$
t
o
)
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
a
r
r
i
v
a
l
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
 
A
S
 
a
r
r
i
v
a
l
,

	
	
	
	
	
	
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
 
A
S
 
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
t
a
g
,

	
	
	
	
	
	
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
,

	
	
	
	
	
	
b
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
 
b
 
O
N
 
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
 
b
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
 
A
N
D
 
b
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
 

	
	
	
	
	
W
H
E
R
E
 
(
 
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
 
A
N
D
 
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
 
!
=
 
'
1
'
 
)
 

	
	
	
	
	
A
N
D
 
(
 

	
	
	
	
	
	
 
(
 
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
'
"
 
.
$
f
r
o
m
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)
 

	
	
	
	
	
	
	
	
	
 
 
 
B
E
T
W
E
E
N
 
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
a
r
r
i
v
a
l
,
 
'
%
Y
/
%
m
/
%
d
'
)
 

	
	
	
	
	
	
	
	
	
 
 
 
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
 
'
%
Y
/
%
m
/
%
d
'
)
 
)
 

	
	
	
	
	
	
O
R
 
(
 
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
'
"
 
.
$
t
o
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)
 

	
	
	
	
	
	
	
	
	
 
	
B
E
T
W
E
E
N
 
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
a
r
r
i
v
a
l
,
 
'
%
Y
/
%
m
/
%
d
'
)
 

	
	
	
	
	
	
	
	
	
	
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
 
'
%
Y
/
%
m
/
%
d
'
)
 
)

	
	
	
	
	
	
O
R
 
(
 
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
a
r
r
i
v
a
l
,
 
'
%
Y
/
%
m
/
%
d
'
)
 

	
	
	
	
	
	
	
	
	
 
	
B
E
T
W
E
E
N
 
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
'
"
 
.
$
f
r
o
m
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)
 

	
	
	
	
	
	
	
	
	
	
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
'
"
 
.
$
t
o
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
)

	
	
	
	
	
	
O
R
 
(
 
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
 
'
%
Y
/
%
m
/
%
d
'
)
 

	
	
	
	
	
	
	
	
	
 
	
B
E
T
W
E
E
N
 
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
'
"
 
.
$
f
r
o
m
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)
 

	
	
	
	
	
	
	
	
	
	
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
'
"
 
.
$
t
o
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
)

	
	
	
	
	
	
)
 
"
;


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
.
=
 
'
G
R
O
U
P
 
B
Y
 
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
L
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
b
o
o
k
i
n
g
_
n
o
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
 
`
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
`
 
,
 
`
n
o
t
e
`
 
,
`
t
i
m
e
s
t
a
m
p
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
 
"
 
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
 
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
t
e
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
L
i
s
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
n
o
t
e
s
L
i
s
t
 
a
s
 
$
n
o
t
e
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
t
r
i
m
(
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
)
 
!
=
 
"
"
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
b
o
o
k
i
n
g
_
n
o
t
e
s
[
$
n
o
t
e
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
]
[
]
 
=
 
$
n
o
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
d
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
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
c
o
n
t
r
a
c
t
L
i
s
t
 
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
u
i
d
s
[
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
r
o
o
m
_
u
i
d
s
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
]
[
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
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
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
_
u
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
,
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
s
u
r
n
a
m
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
_
u
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
g
u
e
s
t
s
L
i
s
t
 
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
s
[
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
]
 
=
 
u
c
f
i
r
s
t
(
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
g
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
)
)
.
'
 
'
.
u
c
f
i
r
s
t
(
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
g
-
>
s
u
r
n
a
m
e
)
)
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
c
o
n
t
r
a
c
t
L
i
s
t
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
c
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
.
'
_
'
.
$
c
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
r
e
s
o
u
r
c
e
 
=
 
$
c
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
s
t
a
r
t
 
=
 
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
'
,
 
s
t
r
t
o
t
i
m
e
(
$
c
-
>
a
r
r
i
v
a
l
)
)
.
'
T
1
2
:
0
0
:
0
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
n
d
 
=
 
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
'
,
 
s
t
r
t
o
t
i
m
e
(
$
c
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
)
)
.
'
T
1
1
:
5
9
:
5
9
'
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
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
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
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
a
r
t
 
=
 
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
'
,
 
s
t
r
t
o
t
i
m
e
(
$
c
-
>
a
r
r
i
v
a
l
)
)
.
'
T
0
0
:
0
0
:
0
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
n
d
 
=
 
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
'
,
 
s
t
r
t
o
t
i
m
e
(
$
c
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
)
)
.
'
T
2
3
:
5
9
:
5
9
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
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
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
a
s
k
=
s
h
o
w
_
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
&
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
.
$
c
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
.
'
&
t
h
i
s
P
r
o
p
e
r
t
y
=
'
.
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
a
s
k
=
e
d
i
t
_
b
o
o
k
i
n
g
&
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
.
$
c
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
.
'
&
t
h
i
s
P
r
o
p
e
r
t
y
=
'
.
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
d
a
t
e
_
e
l
e
m
e
n
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
/
'
,
 
$
t
o
d
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
d
a
y
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
-
'
,
 
$
c
-
>
a
r
r
i
v
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
A
r
r
i
v
a
l
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
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
-
'
,
 
$
c
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
p
e
n
d
i
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
A
r
r
i
v
a
l
 
=
=
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
c
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
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
a
r
r
i
v
e
t
o
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
=
=
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
c
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
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
d
e
p
a
r
t
t
o
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
A
r
r
i
v
a
l
 
<
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
c
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
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
l
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
>
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
c
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
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
r
e
s
i
d
e
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
D
e
p
a
r
t
u
r
e
 
<
 
$
u
n
i
x
T
o
d
a
y
 
&
&
 
$
c
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
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
s
t
i
l
l
h
e
r
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
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
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
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
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
g
T
o
S
h
o
w
 
=
 
$
i
m
g
_
b
l
a
c
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
t
h
e
 
g
u
e
s
t
 
i
s
 
s
t
i
l
l
 
h
e
r
e
 
e
v
e
n
 
i
f
 
t
h
e
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
h
a
s
 
p
a
s
s
e
d
,
 
s
o
 
l
e
t
`
s
 
a
d
j
u
s
t
 
t
h
e
 
e
v
e
n
t
 
s
i
z
e
.
 
I
f
 
i
t
 
o
v
e
r
l
a
p
s
 
w
i
t
h
 
o
t
h
e
r
 
b
o
o
k
i
n
g
,
 
i
t
 
w
i
l
l
 
b
e
 
c
l
e
a
r
l
y
 
v
i
s
i
b
l
e
 
i
n
 
t
h
e
 
d
a
s
h
b
o
a
r
d
.
 
R
e
c
e
p
t
i
o
n
i
s
t
s
 
c
a
n
 
t
h
e
n
 
a
m
e
n
d
 
b
o
o
k
i
n
g
s
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
m
g
T
o
S
h
o
w
 
=
=
 
$
i
m
g
_
s
t
i
l
l
h
e
r
e
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
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
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
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
n
d
 
=
 
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
'
,
 
s
t
r
t
o
t
i
m
e
(
$
t
o
d
a
y
)
)
.
'
T
1
1
:
5
9
:
5
9
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
n
d
 
=
 
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
'
,
 
s
t
r
t
o
t
i
m
e
(
$
t
o
d
a
y
)
)
.
'
T
2
3
:
5
9
:
5
9
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
i
t
l
e
 
=
 
'
'
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
g
u
e
s
t
s
[
$
c
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
]
)
 
&
&
 
$
g
u
e
s
t
s
[
$
c
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
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
i
t
l
e
 
=
 
$
g
u
e
s
t
s
[
$
c
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
i
t
l
e
 
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
O
M
_
A
V
L
C
A
L
_
B
L
A
C
K
_
K
E
Y
'
,
 
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
O
M
_
A
V
L
C
A
L
_
B
L
A
C
K
_
K
E
Y
'
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
'
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
g
u
e
s
t
s
[
$
c
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
]
)
 
&
&
 
$
g
u
e
s
t
s
[
$
c
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
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
.
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
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
f
a
l
s
e
)
.
'
:
 
'
.
$
c
-
>
t
a
g
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
.
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
H
F
R
O
M
'
,
 
'
_
J
O
M
R
E
S
_
H
F
R
O
M
'
,
 
f
a
l
s
e
)
.
'
:
 
'
.
o
u
t
p
u
t
D
a
t
e
(
$
c
-
>
a
r
r
i
v
a
l
)
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
.
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
H
T
O
'
,
 
'
_
J
O
M
R
E
S
_
H
T
O
'
,
 
f
a
l
s
e
)
.
'
:
 
'
.
o
u
t
p
u
t
D
a
t
e
(
$
c
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
)
.
'
'
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
b
o
o
k
i
n
g
_
n
o
t
e
s
[
$
c
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
]
)
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
.
=
 
'
<
h
r
/
>
'
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
a
l
l
_
b
o
o
k
i
n
g
_
n
o
t
e
s
[
$
c
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
]
 
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
 
.
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
.
'
 
'
.
s
a
n
i
t
i
s
e
O
v
e
r
l
i
b
O
u
t
p
u
t
(
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
)
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
o
u
r
c
e
 
>
 
0
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
s
[
]
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
	
	
	
'
i
d
'
 
=
>
 
$
i
d
,

	
	
	
	
	
	
	
	
	
	
'
r
e
s
o
u
r
c
e
I
d
'
 
=
>
 
$
r
e
s
o
u
r
c
e
,

	
	
	
	
	
	
	
	
	
	
'
s
t
a
r
t
'
 
=
>
 
$
s
t
a
r
t
,

	
	
	
	
	
	
	
	
	
	
'
e
n
d
'
 
=
>
 
$
e
n
d
,

	
	
	
	
	
	
	
	
	
	
'
t
i
t
l
e
'
 
=
>
 
$
t
i
t
l
e
,

	
	
	
	
	
	
	
	
	
	
'
u
r
l
'
 
=
>
 
$
u
r
l
,

	
	
	
	
	
	
	
	
	
	
'
c
l
a
s
s
N
a
m
e
'
 
=
>
 
$
i
m
g
T
o
S
h
o
w
,

	
	
	
	
	
	
	
	
	
	
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
 
=
>
 
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
 
=
>
 
$
c
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
,

	
	
	
	
	
	
	
	
	
	
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
 
=
>
 
$
c
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
,

	
	
	
	
	
	
	
	
	
	
'
t
h
i
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
_
r
o
o
m
_
u
i
d
s
'
 
=
>
 
$
r
o
o
m
_
u
i
d
s
[
$
c
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
]
,

	
	
	
	
	
	
	
	
	
	
)
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
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
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
j
s
o
n
_
e
n
c
o
d
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
s
)
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
 
g
e
t
R
e
t
V
a
l
s
(
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
r
e
t
V
a
l
s
;

 
 
 
 
}

}

