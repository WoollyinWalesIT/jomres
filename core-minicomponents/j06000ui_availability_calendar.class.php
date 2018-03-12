
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
0
u
i
_
a
v
a
i
l
a
b
i
l
i
t
y
_
c
a
l
e
n
d
a
r

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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
t
a
s
k
'
 
=
>
 
'
u
i
_
a
v
a
i
l
a
b
i
l
i
t
y
_
c
a
l
e
n
d
a
r
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
U
I
_
A
V
A
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
U
I
_
A
V
A
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
_
A
R
G
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
U
I
D
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
n
o
s
h
o
w
l
e
g
e
n
d
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
U
I
_
A
V
A
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
_
A
R
G
_
N
O
S
H
O
W
L
E
G
E
N
D
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
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
 
'
'
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


 
 
 
 
 
 
 
 
$
s
h
o
w
_
l
e
g
e
n
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
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
n
o
s
h
o
w
l
e
g
e
n
d
'
 
]
)
 
&
&
 
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
n
o
s
h
o
w
l
e
g
e
n
d
'
 
]
 
=
=
 
'
1
'
)
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
(
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
 
'
n
o
s
h
o
w
l
e
g
e
n
d
'
 
]
)
 
&
&
 
$
_
R
E
Q
U
E
S
T
[
 
'
n
o
s
h
o
w
l
e
g
e
n
d
'
 
]
 
=
=
 
'
1
'
)

 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
h
o
w
_
l
e
g
e
n
d
 
=
 
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
)
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
 
(
i
n
t
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
 
=
 
(
i
n
t
)
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
R
E
Q
U
E
S
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

 
 
 
 
 
 
 
 
}

	
	

	
	
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
 
(
i
n
t
)
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
)
;

	
	
}


 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
e
r
_
c
a
n
_
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
e
l
s
e
 
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
 
t
r
u
e
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
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
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
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
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
;
 
/
/
T
O
D
O
:
 
c
o
u
n
t
 
n
u
m
b
e
r
 
o
f
 
t
o
u
r
s
 
i
n
 
p
r
o
p
e
r
t
y
 
i
n
s
t
e
a
d

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
_
d
a
t
e
s
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
5
0
6
0
'
,
 
'
j
i
n
t
o
u
r
'
,
 
a
r
r
a
y
(
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
 
'
s
t
a
r
t
'
 
=
>
 
t
r
u
e
,
 
'
e
n
d
'
 
=
>
 
t
r
u
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
a
r
r
a
y
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
 
$
b
o
o
k
e
d
_
d
a
t
e
s
[
 
'
f
u
l
l
y
_
b
o
o
k
e
d
_
d
a
t
e
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
c
o
n
v
e
r
t
 
t
h
e
s
e
 
t
o
 
o
b
j
e
c
t
,
 
a
s
 
t
h
i
s
 
i
s
 
a
n
 
a
d
a
p
t
a
t
i
o
n
 
o
f
 
t
h
e
 
f
o
l
l
o
w
i
n
g
 
c
o
n
d
i
t
i
o
n
 
w
h
e
r
e
 
t
h
e
 
d
b
 
i
s
 
q
u
e
r
i
e
d

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
b
o
o
k
i
n
g
_
a
r
r
a
y
_
e
l
e
m
e
n
t
s
 
a
s
 
$
e
l
e
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
 
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
o
-
>
d
a
t
e
 
=
 
$
e
l
e
m
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
s
[
 
]
 
=
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
 
C
O
U
N
T
(
r
o
o
m
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
r
o
o
m
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
s
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
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
 
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
q
u
e
r
y
,
 
1
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
r
s
t
D
a
y
O
f
T
h
e
C
u
r
r
e
n
t
M
o
n
t
h
 
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
d
a
t
e
(
'
m
'
)
.
'
/
0
1
/
'
.
d
a
t
e
(
'
Y
'
)
.
'
 
0
0
:
0
0
:
0
0
'
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
 
'
S
E
L
E
C
T
 
d
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
`
d
a
t
e
`
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
'
"
.
$
f
i
r
s
t
D
a
y
O
f
T
h
e
C
u
r
r
e
n
t
M
o
n
t
h
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
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
e
m
p
t
y
 
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
o
o
m
s
_
q
u
a
r
t
e
r
 
=
 
(
(
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
 
/
 
1
0
0
)
 
*
 
.
2
5
)
 
*
 
1
0
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
o
o
m
s
_
h
a
l
f
 
=
 
(
(
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
 
/
 
1
0
0
)
 
*
 
.
5
)
 
*
 
1
0
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
o
o
m
s
_
t
h
r
e
e
q
u
a
r
t
e
r
 
=
 
(
(
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
 
/
 
1
0
0
)
 
*
 
.
7
5
)
 
*
 
1
0
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
o
o
m
s
_
f
u
l
l
 
=
 
$
t
h
i
s
-
>
n
u
m
b
e
r
O
f
R
o
o
m
s
I
n
P
r
o
p
e
r
t
y
;


 
 
 
 
 
 
 
 
$
e
m
p
t
y
_
d
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
q
u
a
r
t
e
r
_
d
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
h
a
l
f
_
d
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
r
e
e
q
u
a
r
t
e
r
_
d
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
f
u
l
l
_
d
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
b
o
o
k
i
n
g
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
b
o
o
k
i
n
g
s
 
a
s
 
$
b
o
o
k
i
n
g
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
e
s
[
 
$
b
o
o
k
i
n
g
-
>
d
a
t
e
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
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
e
s
[
 
$
b
o
o
k
i
n
g
-
>
d
a
t
e
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
e
s
[
 
$
b
o
o
k
i
n
g
-
>
d
a
t
e
 
]
 
=
 
1
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
e
s
 
a
s
 
$
d
a
t
e
 
=
>
 
$
c
o
u
n
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
 
>
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
f
u
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
l
l
_
d
a
t
e
s
[
 
]
 
=
 
$
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
 
<
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
f
u
l
l
 
-
 
1
 
&
&
 
$
c
o
u
n
t
 
>
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
t
h
r
e
e
q
u
a
r
t
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
r
e
e
q
u
a
r
t
e
r
_
d
a
t
e
s
[
 
]
 
=
 
$
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
 
<
 
$
t
h
i
s
-
>
r
o
o
m
s
_
t
h
r
e
e
q
u
a
r
t
e
r
 
&
&
 
$
c
o
u
n
t
 
>
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
h
a
l
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
l
f
_
d
a
t
e
s
[
 
]
 
=
 
$
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
 
<
 
$
t
h
i
s
-
>
r
o
o
m
s
_
h
a
l
f
 
&
&
 
$
c
o
u
n
t
 
>
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
e
m
p
t
y
 
+
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
a
r
t
e
r
_
d
a
t
e
s
[
 
]
 
=
 
$
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
 
=
=
 
$
t
h
i
s
-
>
r
o
o
m
s
_
e
m
p
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
m
p
t
y
_
d
a
t
e
s
[
 
]
 
=
 
$
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
)
;


 
 
 
 
 
 
 
 
$
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
=
 
'
'
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
q
u
a
r
t
e
r
_
d
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
=
 
'
v
a
r
 
q
u
a
r
t
e
r
_
d
a
t
e
s
_
'
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
 
=
 
[
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
q
u
a
r
t
e
r
_
d
a
t
e
s
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
.
=
 
"
'
"
.
$
d
a
t
e
.
"
'
,
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
=
 
s
u
b
s
t
r
(
$
q
u
a
r
t
e
r
_
o
u
t
p
u
t
,
 
0
,
 
s
t
r
l
e
n
(
$
q
u
a
r
t
e
r
_
o
u
t
p
u
t
)
 
-
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
.
=
 
'
]
;
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
h
a
l
f
_
o
u
t
p
u
t
 
=
 
'
'
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
h
a
l
f
_
d
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
l
f
_
o
u
t
p
u
t
 
=
 
'
v
a
r
 
h
a
l
f
_
d
a
t
e
s
_
'
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
 
=
 
[
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
h
a
l
f
_
d
a
t
e
s
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
l
f
_
o
u
t
p
u
t
 
.
=
 
'
"
'
.
$
d
a
t
e
.
'
"
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
l
f
_
o
u
t
p
u
t
 
=
 
s
u
b
s
t
r
(
$
h
a
l
f
_
o
u
t
p
u
t
,
 
0
,
 
s
t
r
l
e
n
(
$
h
a
l
f
_
o
u
t
p
u
t
)
 
-
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
h
a
l
f
_
o
u
t
p
u
t
 
.
=
 
'
]
;
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
r
e
e
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
=
 
'
'
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
t
h
r
e
e
q
u
a
r
t
e
r
_
d
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
r
e
e
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
=
 
'
v
a
r
 
t
h
r
e
e
q
u
a
r
t
e
r
_
d
a
t
e
s
_
'
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
 
=
 
[
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
t
h
r
e
e
q
u
a
r
t
e
r
_
d
a
t
e
s
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
r
e
e
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
.
=
 
"
'
"
.
$
d
a
t
e
.
"
'
,
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
r
e
e
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
=
 
s
u
b
s
t
r
(
$
t
h
r
e
e
q
u
a
r
t
e
r
_
o
u
t
p
u
t
,
 
0
,
 
s
t
r
l
e
n
(
$
t
h
r
e
e
q
u
a
r
t
e
r
_
o
u
t
p
u
t
)
 
-
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
r
e
e
q
u
a
r
t
e
r
_
o
u
t
p
u
t
 
.
=
 
'
]
;
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
f
u
l
l
_
o
u
t
p
u
t
 
=
 
'
'
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
f
u
l
l
_
d
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
l
l
_
o
u
t
p
u
t
 
=
 
'
v
a
r
 
f
u
l
l
_
d
a
t
e
s
_
'
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
 
=
 
[
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
f
u
l
l
_
d
a
t
e
s
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
l
l
_
o
u
t
p
u
t
 
.
=
 
"
'
"
.
$
d
a
t
e
.
"
'
,
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
l
l
_
o
u
t
p
u
t
 
=
 
s
u
b
s
t
r
(
$
f
u
l
l
_
o
u
t
p
u
t
,
 
0
,
 
s
t
r
l
e
n
(
$
f
u
l
l
_
o
u
t
p
u
t
)
 
-
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
l
l
_
o
u
t
p
u
t
 
.
=
 
'
]
;
'
;

 
 
 
 
 
 
 
 
}


	
	
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
 
=
'
'
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
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
'
 
]
 
!
=
 
'
'
 
&
&
 
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
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
Y
e
s
N
o
'
 
]
 
!
=
 
0
 
 
)
 
{

	
	
	
f
o
r
 
(
$
i
=
0
;
$
i
<
=
6
;
$
i
+
+
)
 
{

	
	
	
	
i
f
 
(
$
i
 
!
=
 
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
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
'
 
]
 
)
 
{

	
	
	
	
	
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
 
.
=
 
'
d
a
y
 
!
=
 
'
.
$
i
 
.
'
 
&
&
 
'
;

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
r
e
t
u
r
n
 
[
(
d
a
y
 
!
=
 
1
 
&
&
 
d
a
y
 
!
=
 
2
)
]
;

	
	
	
}

	
	
	
i
f
 
(
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
 
!
=
 
'
'
 
)
 
{

	
	
	
	
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
 
=
 
'
b
e
f
o
r
e
S
h
o
w
D
a
y
:
 
f
u
n
c
t
i
o
n
(
d
a
t
e
)
 
{

	
	
	
	
v
a
r
 
d
a
y
 
=
 
d
a
t
e
.
g
e
t
D
a
y
(
)
;

	
	
	
	
r
e
t
u
r
n
 
[
(
'
.
s
u
b
s
t
r
(
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
,
 
0
,
 
-
4
)
.
'
)
]
;

	
	
	
}
,
'
;

	
	
	
}

	
	
}

	
	

	
	
$
u
r
l
 
=
 
g
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
_
u
r
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
'
'
,
'
&
p
d
e
t
a
i
l
s
_
c
a
l
=
1
'
)
;

 
 
 
 
 
 
 
 
$
i
n
l
i
n
e
_
c
a
l
e
n
d
a
r
 
=
 
'

	
	
	
<
s
c
r
i
p
t
>

	
	
	
'
 
.
$
q
u
a
r
t
e
r
_
o
u
t
p
u
t
.
'

	
	
	
'
 
.
$
h
a
l
f
_
o
u
t
p
u
t
.
'

	
	
	
'
 
.
$
t
h
r
e
e
q
u
a
r
t
e
r
_
o
u
t
p
u
t
.
'

	
	
	
'
 
.
$
f
u
l
l
_
o
u
t
p
u
t
.
'

	
	
	
v
a
r
 
b
o
o
k
i
n
g
_
f
o
r
m
_
u
r
l
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
 
=
 
"
'
.
$
u
r
l
.
'
"
;

	
	
	

	
	
	
f
u
n
c
t
i
o
n
 
h
i
g
h
l
i
g
h
t
D
a
y
s
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
(
d
a
t
e
)

	
	
	
	
{

	
	
	
	
v
a
r
 
y
e
a
r
,
 
m
o
n
t
h
,
 
d
a
y
,
 
c
u
r
r
D
a
t
e
;

	
	
	
	
/
/
 
c
o
m
p
i
l
e
 
c
u
r
r
e
n
t
 
d
a
t
e

	
	
	
	
y
e
a
r
 
=
 
S
t
r
i
n
g
(
d
a
t
e
.
g
e
t
F
u
l
l
Y
e
a
r
(
)
)
;

	
	
	
	
m
o
n
t
h
 
=
 
S
t
r
i
n
g
(
d
a
t
e
.
g
e
t
M
o
n
t
h
(
)
 
+
 
1
)
;

	
	
	
	
i
f
 
(
m
o
n
t
h
.
l
e
n
g
t
h
 
=
=
=
 
1
)
 
{

	
	
	
	
	
m
o
n
t
h
 
=
 
"
0
"
 
+
 
m
o
n
t
h
;

	
	
	
	
	
}

	
	
	
	
d
a
y
 
=
 
S
t
r
i
n
g
(
d
a
t
e
.
g
e
t
D
a
t
e
(
)
)
;

	
	
	
	
i
f
 
(
d
a
y
.
l
e
n
g
t
h
 
=
=
=
 
1
)
 
{

	
	
	
	
	
d
a
y
 
=
 
"
0
"
 
+
 
d
a
y
;

	
	
	
	
	
}

	
	
	
	
c
u
r
r
D
a
t
e
 
=
 
S
t
r
i
n
g
(
y
e
a
r
+
\
'
/
\
'
+
m
o
n
t
h
+
\
'
/
\
'
+
d
a
y
)
;

	
	
	
	
/
/
 
i
s
 
d
a
t
e
 
i
n
 
t
h
e
 
s
p
e
c
i
a
l
D
a
y
s
?

	
	
	
	
i
f
 
(
\
'
u
n
d
e
f
i
n
e
d
\
'
!
=
t
y
p
e
o
f
(
q
u
a
r
t
e
r
_
d
a
t
e
s
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
)
)
{

	
	
	
	
	
i
f
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
i
n
A
r
r
a
y
(
c
u
r
r
D
a
t
e
,
 
q
u
a
r
t
e
r
_
d
a
t
e
s
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
)
 
>
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
 
[
t
r
u
e
,
 
\
'
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
q
u
a
r
t
e
r
\
'
]
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
i
f
 
(
\
'
u
n
d
e
f
i
n
e
d
\
'
!
=
t
y
p
e
o
f
(
h
a
l
f
_
d
a
t
e
s
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
)
)
{

	
	
	
	

	
	
	
	
	
i
f
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
i
n
A
r
r
a
y
(
c
u
r
r
D
a
t
e
,
 
h
a
l
f
_
d
a
t
e
s
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
)
 
>
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
 
[
t
r
u
e
,
 
\
'
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
h
a
l
f
\
'
]
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
i
f
 
(
\
'
u
n
d
e
f
i
n
e
d
\
'
!
=
t
y
p
e
o
f
(
t
h
r
e
e
q
u
a
r
t
e
r
_
d
a
t
e
s
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
)
)
{

	
	
	
	
	
i
f
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
i
n
A
r
r
a
y
(
c
u
r
r
D
a
t
e
,
 
t
h
r
e
e
q
u
a
r
t
e
r
_
d
a
t
e
s
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
)
 
>
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
 
[
t
r
u
e
,
 
\
'
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
t
h
r
e
e
q
u
a
r
t
e
r
\
'
]
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
i
f
 
(
\
'
u
n
d
e
f
i
n
e
d
\
'
!
=
t
y
p
e
o
f
(
f
u
l
l
_
d
a
t
e
s
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
)
)
{

	
	
	
	
	
i
f
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
i
n
A
r
r
a
y
(
c
u
r
r
D
a
t
e
,
 
f
u
l
l
_
d
a
t
e
s
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
)
 
>
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
 
[
t
r
u
e
,
 
\
'
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
f
u
l
l
\
'
]
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
r
e
t
u
r
n
 
[
t
r
u
e
,
 
\
'
\
'
]
;

	
	
	
	
}


	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
#
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
"
 
)
.
d
a
t
e
p
i
c
k
e
r
(
{

	
	
	
	
	
"
d
a
t
e
F
o
r
m
a
t
"
 
:
 
"
y
y
/
m
m
/
d
d
"
,

	
	
	
	
	
"
m
i
n
D
a
t
e
"
:
 
0
,

	
	
	
	
	
f
i
r
s
t
D
a
y
:
 
'
.
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
c
a
l
e
n
d
a
r
s
t
a
r
t
o
f
w
e
e
k
d
a
y
'
 
]
 
-
 
1
)
.
'
,

	
	
	
	
	
'
.
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
.
'

	
	
	
	
	
o
n
S
e
l
e
c
t
:
 
f
u
n
c
t
i
o
n
 
(
d
a
t
e
,
 
e
l
)
 
{

	
	
	
	
	
	
v
a
r
 
d
a
y
 
 
=
 
e
l
.
s
e
l
e
c
t
e
d
D
a
y
,

	
	
	
	
	
	
	
m
o
n
 
 
=
 
e
l
.
s
e
l
e
c
t
e
d
M
o
n
t
h
,

	
	
	
	
	
	
	
y
e
a
r
 
=
 
e
l
.
s
e
l
e
c
t
e
d
Y
e
a
r
;


	
	
	
	
	
	
v
a
r
 
e
l
 
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
e
l
.
d
p
D
i
v
)
.
f
i
n
d
(
\
'
[
d
a
t
a
-
y
e
a
r
=
"
\
'
+
y
e
a
r
+
\
'
"
]
[
d
a
t
a
-
m
o
n
t
h
=
"
\
'
+
m
o
n
+
\
'
"
]
\
'
)
.
f
i
l
t
e
r
(
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
	
	
	
	
r
e
t
u
r
n
 
j
o
m
r
e
s
J
q
u
e
r
y
(
t
h
i
s
)
.
f
i
n
d
(
\
'
a
\
'
)
.
t
e
x
t
(
)
.
t
r
i
m
(
)
 
=
=
 
d
a
y
;

	
	
	
	
	
	
}
)
;

	
	
	
	
	
	
i
f
 
(
 
e
l
.
h
a
s
C
l
a
s
s
(
"
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
f
u
l
l
"
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
w
i
n
d
o
w
.
l
o
c
a
t
i
o
n
 
=
 
b
o
o
k
i
n
g
_
f
o
r
m
_
u
r
l
_
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
+
\
'
&
a
r
r
i
v
a
l
D
a
t
e
=
\
'
+
d
a
t
e
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}
)
;

	
	
	
	
}
)
;

	
	
	
<
/
s
c
r
i
p
t
>

	
	
<
d
i
v
 
i
d
=
"
'
 
.
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
.
'
"
>
<
/
d
i
v
>
'
;


 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
_
l
e
g
e
n
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
l
i
n
e
_
c
a
l
e
n
d
a
r
 
.
=
 
'

	
	
	
<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
/
j
a
v
a
s
c
r
i
p
t
"
>

	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
d
o
c
u
m
e
n
t
)
.
r
e
a
d
y
(
f
u
n
c
t
i
o
n
(
)
{

	
	
	
 
 
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
l
e
g
e
n
d
_
d
i
a
l
o
g
"
)
.
d
i
a
l
o
g
(
{

	
	
	
	
a
u
t
o
O
p
e
n
:
 
f
a
l
s
e

	
	
	
}
)
;

	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
#
l
e
g
e
n
d
_
d
i
a
l
o
g
_
o
p
e
n
e
r
"
 
)
.
c
l
i
c
k
(
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
#
l
e
g
e
n
d
_
d
i
a
l
o
g
"
 
)
.
d
i
a
l
o
g
(
 
"
o
p
e
n
"
 
)
;

	
	
	
	
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
)
;

	
	
	
}
)
;

	
	
	
<
/
s
c
r
i
p
t
>
'
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
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
l
i
n
e
_
c
a
l
e
n
d
a
r
 
.
=
 
'

	
	
	
	
<
a
 
h
r
e
f
=
"
#
"
 
i
d
=
"
l
e
g
e
n
d
_
d
i
a
l
o
g
_
o
p
e
n
e
r
"
 
t
i
t
l
e
=
"
L
e
g
e
n
d
"
>
<
i
m
g
 
s
r
c
=
"
'
 
.
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
i
n
f
o
r
m
a
t
i
o
n
.
p
n
g
"
 
/
>
<
/
a
>

	
	
	
	
<
d
i
v
 
i
d
=
"
l
e
g
e
n
d
_
d
i
a
l
o
g
"
 
t
i
t
l
e
=
"
L
e
g
e
n
d
"
>

	
	
	
	
<
t
a
b
l
e
 
w
i
d
t
h
=
"
1
0
0
%
"
 
b
o
r
d
e
r
=
"
0
"
>

	
	
	
	
	
<
t
r
>

	
	
	
	
	
	
<
t
d
 
c
l
a
s
s
=
"
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
f
u
l
l
"
 
w
i
d
t
h
=
"
2
0
"
>
&
n
b
s
p
;
<
/
t
d
>
<
t
d
>
'
 
.
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
A
V
L
C
A
L
_
F
U
L
L
Y
B
O
O
K
E
D
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
A
V
L
C
A
L
_
F
U
L
L
Y
B
O
O
K
E
D
'
)
.
'
<
/
t
d
>

	
	
	
	
	
<
/
t
r
>

	
	
	
	
<
/
t
a
b
l
e
>

	
	
	
	
<
/
d
i
v
>

	
	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
l
i
n
e
_
c
a
l
e
n
d
a
r
 
.
=
 
'

	
	
	
	
<
a
 
h
r
e
f
=
"
#
"
 
i
d
=
"
l
e
g
e
n
d
_
d
i
a
l
o
g
_
o
p
e
n
e
r
"
 
t
i
t
l
e
=
"
L
e
g
e
n
d
"
>
<
i
m
g
 
s
r
c
=
"
'
 
.
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
i
n
f
o
r
m
a
t
i
o
n
.
p
n
g
"
 
/
>
<
/
a
>

	
	
	
	
<
d
i
v
 
i
d
=
"
l
e
g
e
n
d
_
d
i
a
l
o
g
"
 
t
i
t
l
e
=
"
L
e
g
e
n
d
"
>

	
	
	
	
<
t
a
b
l
e
 
w
i
d
t
h
=
"
1
0
0
%
"
 
b
o
r
d
e
r
=
"
0
"
>

	
	
	
	
	
<
t
r
>

	
	
	
	
	
	
<
t
d
 
c
l
a
s
s
=
"
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
q
u
a
r
t
e
r
"
 
w
i
d
t
h
=
"
2
0
"
>
&
n
b
s
p
;
<
/
t
d
>
<
t
d
>
'
 
.
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
A
V
L
C
A
L
_
Q
U
A
R
T
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
A
V
L
C
A
L
_
Q
U
A
R
T
E
R
'
)
.
'
<
/
t
d
>

	
	
	
	
	
<
/
t
r
>

	
	
	
	
	
<
t
r
>

	
	
	
	
	
	
<
t
d
 
c
l
a
s
s
=
"
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
h
a
l
f
"
 
w
i
d
t
h
=
"
2
0
"
>
&
n
b
s
p
;
<
/
t
d
>
<
t
d
>
'
 
.
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
A
V
L
C
A
L
_
H
A
L
F
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
A
V
L
C
A
L
_
H
A
L
F
'
)
.
'
<
/
t
d
>

	
	
	
	
	
<
/
t
r
>

	
	
	
	
	
<
t
r
>

	
	
	
	
	
	
<
t
d
 
c
l
a
s
s
=
"
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
t
h
r
e
e
q
u
a
r
t
e
r
"
 
w
i
d
t
h
=
"
2
0
"
>
&
n
b
s
p
;
<
/
t
d
>
<
t
d
>
'
 
.
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
A
V
L
C
A
L
_
T
H
R
E
E
Q
U
A
R
T
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
A
V
L
C
A
L
_
T
H
R
E
E
Q
U
A
R
T
E
R
'
)
.
'
<
/
t
d
>

	
	
	
	
	
<
/
t
r
>

	
	
	
	
	
<
t
r
>

	
	
	
	
	
	
<
t
d
 
c
l
a
s
s
=
"
c
a
l
e
n
d
a
r
_
b
a
c
k
g
r
o
u
n
d
_
f
u
l
l
"
 
w
i
d
t
h
=
"
2
0
"
>
&
n
b
s
p
;
<
/
t
d
>
<
t
d
>
'
 
.
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
A
V
L
C
A
L
_
F
U
L
L
Y
B
O
O
K
E
D
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
A
V
L
C
A
L
_
F
U
L
L
Y
B
O
O
K
E
D
'
)
.
'
<
/
t
d
>

	
	
	
	
	
<
/
t
r
>

	
	
	
	
<
/
t
a
b
l
e
>

	
	
	
	
<
/
d
i
v
>

	
	
	
	
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
$
i
n
l
i
n
e
_
c
a
l
e
n
d
a
r
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
 
$
i
n
l
i
n
e
_
c
a
l
e
n
d
a
r
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
M
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
.

 
 
 
 
 
#

 
 
 
 
 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
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
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
 
 
 
 
*
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

