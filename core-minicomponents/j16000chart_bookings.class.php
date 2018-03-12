
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


/
/
T
h
i
s
 
i
s
 
a
 
m
o
n
t
h
 
v
i
e
w
 
c
h
a
r
t
 
o
f
 
a
l
l
 
p
a
i
d
 
b
o
o
k
i
n
g
s
,
 
e
x
c
l
u
d
e
s
 
c
a
n
c
e
l
l
e
d
/
p
e
n
d
i
n
g
/
u
n
p
a
i
d
 
o
n
e
s
)

c
l
a
s
s
 
j
1
6
0
0
0
c
h
a
r
t
_
b
o
o
k
i
n
g
s

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
c
h
a
r
t
_
t
y
p
e
 
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
P
O
S
T
,
 
'
j
r
_
c
h
a
r
t
_
t
y
p
e
'
,
 
'
l
i
n
e
'
)
;


 
 
 
 
 
 
 
 
/
/
i
m
p
o
r
t
 
j
o
m
r
e
s
 
c
h
a
r
t
s
 
c
l
a
s
s
 
a
n
d
 
c
r
e
a
t
e
 
a
 
n
e
w
 
i
n
s
t
a
n
c
e

 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
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
h
a
r
t
s
'
)
;

 
 
 
 
 
 
 
 
$
c
h
a
r
t
 
=
 
n
e
w
 
j
o
m
r
e
s
_
c
h
a
r
t
s
(
)
;


 
 
 
 
 
 
 
 
/
/
s
e
t
 
n
e
w
 
c
h
a
r
t
 
d
a
t
a

 
 
 
 
 
 
 
 
$
c
h
a
r
t
-
>
t
y
p
e
 
=
 
$
c
h
a
r
t
_
t
y
p
e
;

 
 
 
 
 
 
 
 
$
c
h
a
r
t
-
>
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
S
T
A
T
U
S
_
B
O
O
K
I
N
G
S
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
S
T
A
T
U
S
_
B
O
O
K
I
N
G
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
h
a
r
t
-
>
u
r
l
 
=
 
j
o
m
r
e
s
U
r
l
(
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
A
D
M
I
N
.
'
&
t
a
s
k
=
c
h
a
r
t
s
&
j
r
_
c
h
a
r
t
=
c
h
a
r
t
_
b
o
o
k
i
n
g
s
'
)
;

 
 
 
 
 
 
 
 
$
c
h
a
r
t
-
>
t
i
t
l
e
_
c
l
a
s
s
 
=
 
'
p
a
n
e
l
-
d
e
f
a
u
l
t
'
;

 
 
 
 
 
 
 
 
$
c
h
a
r
t
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
H
A
R
T
_
B
O
O
K
I
N
G
S
_
D
E
S
C
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
H
A
R
T
_
B
O
O
K
I
N
G
S
_
D
E
S
C
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
h
a
r
t
-
>
l
a
b
e
l
s
 
=
 
a
r
r
a
y
(
'
J
a
n
'
,
 
'
F
e
b
'
,
 
'
M
a
r
'
,
 
'
A
p
r
'
,
 
'
M
a
y
'
,
 
'
J
u
n
'
,
 
'
J
u
l
'
,
 
'
A
u
g
'
,
 
'
S
e
p
'
,
 
'
O
c
t
'
,
 
'
N
o
v
'
,
 
'
D
e
c
'
)
;


 
 
 
 
 
 
 
 
/
/
q
u
e
r
y
 
d
b
 
f
o
r
 
r
e
l
e
v
a
n
t
 
r
o
w
s
 
f
o
r
 
t
h
i
s
 
c
h
a
r
t

 
 
 
 
 
 
 
 
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
 
 
 

	
	
	
	
	
S
U
M
(
 
C
A
S
E
 
W
H
E
N
 
b
.
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
 
<
 
0
 
T
H
E
N
 
0
 
E
L
S
E
 
b
.
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
 
E
N
D
 
)
 
A
S
 
g
r
a
n
d
_
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
a
 

	
	
	
	
	
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
l
i
n
e
i
t
e
m
s
 
b
 
O
N
 
a
.
i
d
 
=
 
b
.
i
n
v
_
i
d
 

	
	
	
	
W
H
E
R
E
 
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
i
d
 
>
 
0
 

	
	
	
	
G
R
O
U
P
 
B
Y
 
a
.
i
d
 

	
	
	
	
O
R
D
E
R
 
B
Y
 
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
 
A
S
C
 

	
	
	
	
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
 
/
/
n
o
 
b
o
o
k
i
n
g
s
 
i
n
 
d
b
,
 
s
o
 
w
e
`
l
l
 
o
u
t
p
u
t
 
a
 
d
e
m
o
 
c
h
a
r
t

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
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


 
 
 
 
 
 
 
 
 
 
 
 
/
/
n
o
w
 
w
e
 
c
r
e
a
t
e
 
a
n
 
a
r
r
a
y
 
o
f
 
a
m
o
u
n
t
s
 
f
o
r
 
e
a
c
h
 
y
e
a
r
/
m
o
n
t
h

 
 
 
 
 
 
 
 
 
 
 
 
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
m
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
n
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
r
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
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
y
e
a
r
 
=
 
d
a
t
e
(
'
Y
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
r
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
)
)
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
r
e
s
u
l
t
s
[
$
y
e
a
r
]
[
$
m
o
n
t
h
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
$
y
e
a
r
]
[
$
m
o
n
t
h
]
 
=
 
0
.
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
$
y
e
a
r
]
[
$
m
o
n
t
h
]
 
+
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
(
f
l
o
a
t
)
 
$
r
-
>
g
r
a
n
d
_
t
o
t
a
l
,
 
2
,
 
'
.
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
s
o
r
t
 
r
e
s
u
l
t
s
 
b
y
 
y
e
a
r
 
a
s
c
e
n
d
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
k
s
o
r
t
(
$
r
e
s
u
l
t
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
b
u
i
l
d
 
c
h
a
r
t
 
d
a
t
a
s
e
t
s
 
b
y
 
y
e
a
r

 
 
 
 
 
 
 
 
 
 
 
 
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
s
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
b
u
i
l
d
 
d
a
t
a
 
f
o
r
 
e
a
c
h
 
m
o
n
t
h

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
=
 
1
2
;
 
+
+
$
i
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
v
[
$
i
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
[
]
 
=
 
$
v
[
$
i
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
[
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
n
e
r
a
t
e
 
t
h
e
 
d
a
t
a
s
e
t
 
c
o
l
o
r

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
 
=
 
m
t
_
r
a
n
d
(
0
,
 
2
5
5
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
 
=
 
m
t
_
r
a
n
d
(
0
,
 
2
5
5
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
 
=
 
m
t
_
r
a
n
d
(
0
,
 
2
5
5
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
s
e
t
 
d
a
t
a
s
e
t
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
h
a
r
t
-
>
d
a
t
a
s
e
t
s
[
$
k
]
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
l
a
b
e
l
'
 
=
>
 
$
k
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
d
a
t
a
'
 
=
>
 
$
d
a
t
a
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
f
i
l
l
C
o
l
o
r
'
 
=
>
 
'
r
g
b
a
(
'
.
$
a
.
'
,
'
.
$
b
.
'
,
'
.
$
c
.
'
,
0
.
5
)
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
s
t
r
o
k
e
C
o
l
o
r
'
 
=
>
 
'
r
g
b
a
(
'
.
$
a
.
'
,
'
.
$
b
.
'
,
'
.
$
c
.
'
,
1
)
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
p
o
i
n
t
C
o
l
o
r
'
 
=
>
 
'
r
g
b
a
(
'
.
$
a
.
'
,
'
.
$
b
.
'
,
'
.
$
c
.
'
,
1
)
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
p
o
i
n
t
S
t
r
o
k
e
C
o
l
o
r
'
 
=
>
 
'
#
f
f
f
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
F
i
l
l
'
 
=
>
 
'
#
f
f
f
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
p
o
i
n
t
H
i
g
h
l
i
g
h
t
S
t
r
o
k
e
'
 
=
>
 
'
r
g
b
a
(
'
.
$
a
.
'
,
'
.
$
b
.
'
,
'
.
$
c
.
'
,
1
)
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
d
i
s
p
l
a
y
 
t
h
e
 
c
h
a
r
t
 
o
r
 
r
e
t
u
r
n
 
i
t

 
 
 
 
 
 
 
 
i
f
 
(
!
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
c
h
a
r
t
-
>
g
e
t
_
c
h
a
r
t
(
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
c
h
a
r
t
-
>
g
e
t
_
c
h
a
r
t
(
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

