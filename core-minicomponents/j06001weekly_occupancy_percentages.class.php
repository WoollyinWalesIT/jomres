
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
w
e
e
k
l
y
_
o
c
c
u
p
a
n
c
y
_
p
e
r
c
e
n
t
a
g
e
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
d
a
s
h
b
o
a
r
d
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
)
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
1
D
A
S
H
B
O
A
R
D
'
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
 
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
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
 
|
|
 
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
i
s
_
w
i
d
g
e
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
s
_
w
i
d
g
e
t
 
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
i
s
_
w
i
d
g
e
t
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
i
s
_
w
i
d
g
e
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

	
	

 
 
 
 
 
 
 
 
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
o
u
t
p
u
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
p
a
g
e
o
u
t
p
u
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
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
O
V
E
R
A
L
L
_
R
O
O
M
S
_
B
O
O
K
E
D
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
O
V
E
R
A
L
L
_
R
O
O
M
S
_
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
O
V
E
R
A
L
L
_
R
O
O
M
S
_
B
O
O
K
E
D
'
,
 
f
a
l
s
e
)
;

	
	

 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
c
s
s
'
,
 
J
O
M
R
E
S
_
C
S
S
_
R
E
L
P
A
T
H
,
 
'
c
s
s
-
c
i
r
c
u
l
a
r
-
p
r
o
g
-
b
a
r
.
c
s
s
'
)
;


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
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
b
a
s
i
c
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
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
s
-
>
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
i
s
s
e
t
(
$
c
u
r
r
e
n
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
d
e
t
a
i
l
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
r
o
o
m
s
'
]
)
)
 
{

	
	
	
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
 
=
 
c
o
u
n
t
(
$
c
u
r
r
e
n
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
d
e
t
a
i
l
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
r
o
o
m
s
'
]
)
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
;
 
/
/
 
N
o
t
h
i
n
g
 
w
e
 
c
a
n
 
d
o
,
 
n
o
 
r
o
o
m
s
 
=
 
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

	
	
}

	
	

	
	

	
	
$
s
t
a
r
t
 
 
 
=
 
n
e
w
 
D
a
t
e
T
i
m
e
(
)
;

	
	
$
e
n
d
 
 
 
 
 
=
 
n
e
w
 
D
a
t
e
T
i
m
e
(
)
;

	
	
$
s
t
a
r
t
 
 
 
=
 
$
s
t
a
r
t
-
>
m
o
d
i
f
y
(
 
'
0
 
d
a
y
s
'
 
)
;
 

	
	

	
	
i
f
 
(
$
i
s
_
w
i
d
g
e
t
)
 
{

	
	
	
$
e
n
d
 
 
 
 
 
=
 
$
e
n
d
-
>
m
o
d
i
f
y
(
 
'
+
3
 
d
a
y
s
'
 
)
;
 
/
/
 
D
a
t
e
 
P
e
r
i
o
d
 
d
o
e
s
n
'
t
 
i
n
c
l
u
d
e
 
t
h
e
 
e
n
d
 
d
a
t
e

	
	
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
 
$
e
n
d
-
>
m
o
d
i
f
y
(
 
'
+
7
 
d
a
y
s
'
 
)
;
 
/
/
 
D
a
t
e
 
P
e
r
i
o
d
 
d
o
e
s
n
'
t
 
i
n
c
l
u
d
e
 
t
h
e
 
e
n
d
 
d
a
t
e

	
	
}

	
	
$
i
n
t
e
r
v
a
l
 
=
 
n
e
w
 
D
a
t
e
I
n
t
e
r
v
a
l
(
'
P
1
D
'
)
;

	
	
$
d
a
t
e
r
a
n
g
e
 
=
 
n
e
w
 
D
a
t
e
P
e
r
i
o
d
(
$
s
t
a
r
t
,
 
$
i
n
t
e
r
v
a
l
 
,
$
e
n
d
)
;

	
	
$
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

	
	
f
o
r
e
a
c
h
(
$
d
a
t
e
r
a
n
g
e
 
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
d
a
t
e
s
[
$
d
a
t
e
-
>
f
o
r
m
a
t
(
"
Y
/
m
/
d
"
)
]
[
'
n
u
m
b
e
r
_
b
o
o
k
e
d
'
]
=
 
0
;

	
	
	
$
d
a
t
e
s
[
$
d
a
t
e
-
>
f
o
r
m
a
t
(
"
Y
/
m
/
d
"
)
]
[
'
d
a
t
e
_
o
f
_
m
o
n
t
h
'
]
=
$
d
a
t
e
-
>
f
o
r
m
a
t
(
"
d
"
)
;

	
	
	
$
d
a
t
e
s
[
$
d
a
t
e
-
>
f
o
r
m
a
t
(
"
Y
/
m
/
d
"
)
]
[
'
m
o
n
t
h
_
n
a
m
e
'
]
=
$
d
a
t
e
-
>
f
o
r
m
a
t
(
"
M
"
)
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
S
E
L
E
C
T
 
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
_
u
i
d
,
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
 
A
N
D
 
(
"
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
v
a
l
 
)
 
{

	
	
	
$
q
u
e
r
y
 
.
=
 
"
`
d
a
t
e
`
 
=
 
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
 
O
R
 
"
;

	
	
}

	
	
$
q
u
e
r
y
 
=
 
r
t
r
i
m
(
$
q
u
e
r
y
,
 
"
 
O
R
 
"
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
r
e
s
)
 
{

	
	
	
	
$
d
a
t
e
s
[
$
r
e
s
-
>
d
a
t
e
]
[
'
n
u
m
b
e
r
_
b
o
o
k
e
d
'
]
 
+
+
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
n
u
m
b
e
r
_
b
o
o
k
e
d
)
 
{

	
	
	
$
p
e
r
c
e
n
t
a
g
e
_
b
o
o
k
e
d
 
=
 
(
$
n
u
m
b
e
r
_
b
o
o
k
e
d
[
'
n
u
m
b
e
r
_
b
o
o
k
e
d
'
]
*
1
0
0
)
/
$
n
u
m
b
e
r
_
o
f
_
r
o
o
m
s
;


	
	
	
$
d
a
t
e
s
[
$
d
a
t
e
]
[
'
p
e
r
c
e
n
t
a
g
e
'
]
 
=
 
(
i
n
t
)
$
p
e
r
c
e
n
t
a
g
e
_
b
o
o
k
e
d
;

	
	
	
$
d
a
t
e
s
[
$
d
a
t
e
]
[
'
f
r
i
e
n
d
l
y
_
d
a
t
e
'
]
 
=
 
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
d
a
t
e
 
)
 
;
 
/
/
 
T
h
i
s
 
d
o
e
s
n
'
t
 
s
c
a
l
e
 
w
e
l
l
 
r
e
s
p
o
n
s
i
v
l
y
 
s
o
 
w
e
'
l
l
 
u
s
e
 
t
h
e
 
d
a
y
s
 
a
n
d
 
m
o
n
t
h
 
n
a
m
e
s
 
a
s
 
d
e
t
e
r
m
i
n
e
d
 
u
p
 
a
b
o
v
e
.

	
	
	
$
d
a
t
e
s
[
$
d
a
t
e
]
[
'
'
]
 
=
 

	
	
	
$
d
a
t
e
s
[
$
d
a
t
e
]
[
'
o
v
e
r
5
0
'
]
 
=
 
'
'
;

	
	
	
i
f
 
(
 
$
p
e
r
c
e
n
t
a
g
e
_
b
o
o
k
e
d
>
5
0
)
 
{

	
	
	
	
$
d
a
t
e
s
[
$
d
a
t
e
]
[
'
o
v
e
r
5
0
'
]
 
=
 
'
o
v
e
r
5
0
'
;

	
	
	
}

	
	
}


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
B
A
C
K
E
N
D
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
d
a
t
e
s
)
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
$
i
s
_
w
i
d
g
e
t
)
 
{

	
	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
w
i
d
g
e
t
_
w
e
e
k
l
y
_
o
c
c
u
p
a
n
c
y
_
p
e
r
c
e
n
t
a
g
e
s
.
h
t
m
l
'
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
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
w
e
e
k
l
y
_
o
c
c
u
p
a
n
c
y
_
p
e
r
c
e
n
t
a
g
e
s
.
h
t
m
l
'
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
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
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
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
 
E
v
e
n
t
/
M
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

