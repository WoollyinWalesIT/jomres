
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
 
i
s
 
c
u
r
r
e
n
t
l
y
 
a
v
a
i
l
a
b
l
e
 
f
o
r
 
u
s
e
 
i
n
 
a
l
l
 
p
e
r
s
o
n
a
l
 
o
r
 
c
o
m
m
e
r
c
i
a
l
 
p
r
o
j
e
c
t
s
 
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
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
.
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


f
u
n
c
t
i
o
n
 
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
e
r
r
o
r
_
l
o
g
g
i
n
g
_
c
m
s
_
f
i
l
e
s
_
t
o
_
n
o
t
_
b
a
c
k
t
r
a
c
e
(
)

{

 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
'
a
p
p
l
i
c
a
t
i
o
n
.
p
h
p
'
,
 
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
.
c
l
a
s
s
.
p
h
p
'
,
 
'
s
i
t
e
.
p
h
p
'
,
 
'
c
m
s
.
p
h
p
'
,
 
'
h
e
l
p
e
r
.
p
h
p
'
)
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
s
e
s
s
i
o
n
i
d
(
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
_
S
E
S
S
I
O
N
)
)
 
{

 
 
 
 
 
 
 
 
@
s
e
s
s
i
o
n
_
s
t
a
r
t
(
)
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
_
S
E
S
S
I
O
N
[
'
j
o
m
r
e
s
_
w
p
_
s
e
s
s
i
o
n
'
]
[
'
i
d
'
]
)
 
&
&
 
$
_
S
E
S
S
I
O
N
[
'
j
o
m
r
e
s
_
w
p
_
s
e
s
s
i
o
n
'
]
[
'
i
d
'
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
s
e
s
s
i
o
n
_
i
d
 
=
 
$
_
S
E
S
S
I
O
N
[
'
j
o
m
r
e
s
_
w
p
_
s
e
s
s
i
o
n
'
]
[
'
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
s
e
s
s
i
o
n
_
i
d
 
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
)
;

 
 
 
 
 
 
 
 
$
_
S
E
S
S
I
O
N
[
'
j
o
m
r
e
s
_
w
p
_
s
e
s
s
i
o
n
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

 
 
 
 
 
 
 
 
$
_
S
E
S
S
I
O
N
[
'
j
o
m
r
e
s
_
w
p
_
s
e
s
s
i
o
n
'
]
[
'
i
d
'
]
 
=
 
$
s
e
s
s
i
o
n
_
i
d
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
s
e
s
s
i
o
n
_
i
d
;

}


/
/
 
D
a
t
e
 
i
s
 
s
e
n
t
 
i
n
 
f
o
r
m
a
t
 
Y
Y
Y
Y
/
m
m
/
d
d
,
 
e
.
g
.
 
2
0
1
3
/

f
u
n
c
t
i
o
n
 
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
o
u
t
p
u
t
_
d
a
t
e
(
$
d
a
t
e
,
 
$
f
o
r
m
a
t
 
=
 
f
a
l
s
e
)

{

 
 
 
 
i
f
 
(
!
$
f
o
r
m
a
t
)
 
{

 
 
 
 
 
 
 
 
$
f
o
r
m
a
t
 
=
 
g
e
t
_
o
p
t
i
o
n
(
'
d
a
t
e
_
f
o
r
m
a
t
'
)
;

 
 
 
 
}


 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
a
t
e
_
i
1
8
n
(
$
f
o
r
m
a
t
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
d
a
t
e
)
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


f
u
n
c
t
i
o
n
 
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
g
e
t
r
e
g
i
s
t
r
a
t
i
o
n
l
i
n
k
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
U
R
L
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
w
p
-
l
o
g
i
n
.
p
h
p
?
a
c
t
i
o
n
=
r
e
g
i
s
t
e
r
'
)
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
l
o
g
o
u
t
_
t
a
s
k
(
)

{

 
 
 
 
r
e
t
u
r
n
 
'
w
p
-
l
o
g
i
n
.
p
h
p
?
a
c
t
i
o
n
=
l
o
g
o
u
t
'
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
l
o
g
i
n
_
t
a
s
k
(
)

{

 
 
 
 
r
e
t
u
r
n
 
'
w
p
-
l
o
g
i
n
.
p
h
p
?
a
c
t
i
o
n
=
l
o
g
i
n
'
;

}


f
u
n
c
t
i
o
n
 
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)

{

 
 
 
 
i
f
 
(
s
t
r
p
o
s
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
S
C
R
I
P
T
_
N
A
M
E
'
]
,
 
'
w
p
-
a
d
m
i
n
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
i
f
 
(
s
t
r
p
o
s
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
S
C
R
I
P
T
_
N
A
M
E
'
]
,
 
'
a
j
a
x
.
p
h
p
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
 
f
a
l
s
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
 
i
s
_
a
d
m
i
n
(
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
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
c
r
e
a
t
e
N
e
w
U
s
e
r
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
m
p
B
o
o
k
i
n
g
H
a
n
d
l
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
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;


 
 
 
 
$
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

 
 
 
 
 
 
 
 
$
g
u
e
s
t
D
e
e
t
s
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
G
u
e
s
t
D
a
t
a
(
)
;


 
 
 
 
 
 
 
 
/
/
I
f
 
t
h
e
 
e
m
a
i
l
 
a
d
d
r
e
s
s
 
a
l
r
e
a
d
y
 
e
x
i
s
t
s
 
i
n
 
t
h
e
 
s
y
s
t
e
m
,
 
w
e
'
l
l
 
n
o
t
 
b
o
t
h
e
r
 
c
a
r
r
y
i
n
g
 
o
n
,
 
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
 
t
h
i
s
 
u
s
e
r
'
s
 
"
m
o
s
_
i
d
"

 
 
 
 
 
 
 
 
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
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
u
s
e
r
_
e
m
a
i
l
 
=
 
'
"
.
$
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
.
"
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
e
x
i
s
t
i
n
g
 
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
,
 
1
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
e
x
i
s
t
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
e
x
i
s
t
i
n
g
;

 
 
 
 
 
 
 
 
}


/
*
 
	
	
$
v
a
l
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
 
!
$
v
a
l
i
d
 
)

 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
n
a
m
e
 
=
 
$
g
u
e
s
t
D
e
e
t
s
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
 
.
 
"
_
"
 
.
 
$
g
u
e
s
t
D
e
e
t
s
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
 
.
 
r
a
n
d
(
 
0
,
 
1
0
0
0
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
n
a
m
e
 
=
 
s
t
r
t
o
l
o
w
e
r
(
 
p
r
e
g
_
r
e
p
l
a
c
e
(
 
'
/
[
^
A
-
Z
a
-
z
0
-
9
_
-
]
+
/
'
,
 
"
"
,
 
$
u
s
e
r
n
a
m
e
 
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
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
u
s
e
r
_
l
o
g
i
n
 
=
 
'
"
 
.
 
$
u
s
e
r
n
a
m
e
 
.
 
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
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
 
c
o
u
n
t
(
 
$
u
s
e
r
s
 
)
 
=
=
 
0
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
*
/


 
 
 
 
 
 
 
 
$
n
a
m
e
 
=
 
$
g
u
e
s
t
D
e
e
t
s
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
.
'
 
'
.
$
g
u
e
s
t
D
e
e
t
s
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
;


 
 
 
 
 
 
 
 
$
u
s
e
r
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
u
s
e
r
_
l
o
g
i
n
'
 
=
>
 
$
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
'
u
s
e
r
_
p
a
s
s
'
 
=
>
 
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
,

 
 
 
 
 
 
 
 
 
 
 
 
'
u
s
e
r
_
e
m
a
i
l
'
 
=
>
 
$
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
,

 
 
 
 
 
 
 
 
 
 
 
 
'
u
s
e
r
_
n
i
c
e
n
a
m
e
'
 
=
>
 
$
n
a
m
e
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
i
d
 
=
 
w
p
_
i
n
s
e
r
t
_
u
s
e
r
(
$
u
s
e
r
d
a
t
a
)
;


 
 
 
 
 
 
 
 
/
/
O
n
 
s
u
c
c
e
s
s

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
w
p
_
e
r
r
o
r
(
$
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
=
t
r
u
e
;
 
/
/
 
D
i
s
a
b
l
e
d
 
a
s
 
t
h
i
s
 
s
e
t
t
i
n
g
 
w
o
u
l
d
 
b
e
 
i
n
c
o
r
r
e
c
t
 
d
u
r
i
n
g
 
t
h
e
 
b
o
o
k
i
n
g
 
p
h
a
s
e
.
 
W
e
 
w
a
n
t
 
n
e
w
l
y
 
c
r
e
a
t
e
d
 
u
s
e
r
s
 
t
o
 
h
a
v
e
 
t
h
e
i
r
 
d
e
t
a
i
l
s
 
r
e
c
o
r
d
e
d
 
b
y
 
t
h
e
 
i
n
s
e
r
t
G
u
e
s
t
D
e
e
t
s
 
f
u
n
c
t
i
o
n
 
i
n
 
i
n
s
e
r
t
b
o
o
k
i
n
g
s

 
 
 
 
 
 
 
 
 
 
 
 
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
 
=
 
$
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
p
d
a
t
e
G
u
e
s
t
F
i
e
l
d
(
'
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
'
,
 
$
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
j
e
c
t
 
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
S
U
B
J
E
C
T
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
S
U
B
J
E
C
T
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
D
E
A
R
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
D
E
A
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
 
'
.
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
u
e
s
t
D
e
e
t
s
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
)
.
'
 
'
.
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
u
e
s
t
D
e
e
t
s
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
t
e
x
t
 
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
T
H
A
N
K
Y
O
U
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
T
H
A
N
K
Y
O
U
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
<
b
r
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
U
S
E
R
N
A
M
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
U
S
E
R
N
A
M
E
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
 
'
.
$
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
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
t
e
x
t
 
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
P
A
S
S
W
O
R
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
P
A
S
S
W
O
R
D
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
 
'
.
$
u
s
e
r
d
a
t
a
[
'
u
s
e
r
_
p
a
s
s
'
]
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
t
e
x
t
 
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
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
L
O
G
_
I
N
'
,
 
'
_
J
R
P
O
R
T
A
L
_
N
E
W
U
S
E
R
_
L
O
G
_
I
N
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
 
'
.
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
l
i
v
e
_
s
i
t
e
'
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
u
s
e
N
e
w
u
s
e
r
s
_
s
e
n
d
e
m
a
i
l
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
!
j
o
m
r
e
s
M
a
i
l
e
r
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
m
a
i
l
f
r
o
m
'
)
,
 
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
f
r
o
m
n
a
m
e
'
)
,
 
$
g
u
e
s
t
D
e
e
t
s
[
 
'
e
m
a
i
l
'
 
]
,
 
$
s
u
b
j
e
c
t
,
 
$
t
e
x
t
,
 
$
m
o
d
e
 
=
 
1
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
r
e
g
i
s
t
r
a
t
i
o
n
 
e
m
a
i
l
 
t
o
 
g
u
e
s
t
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
h
o
t
e
l
e
m
a
i
l
.
'
 
S
u
b
j
e
c
t
'
.
$
s
u
b
j
e
c
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
i
d
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
R
e
g
i
s
t
r
a
t
i
o
n
U
R
L
(
)

{

}


f
u
n
c
t
i
o
n
 
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
g
e
t
T
e
x
t
E
d
i
t
o
r
(
$
n
a
m
e
,
 
$
c
o
n
t
e
n
t
,
 
$
h
i
d
d
e
n
F
i
e
l
d
,
 
$
w
i
d
t
h
,
 
$
h
e
i
g
h
t
,
 
$
c
o
l
,
 
$
r
o
w
)

{

 
 
 
 
o
b
_
s
t
a
r
t
(
)
;
 
 
/
/
 
T
h
e
 
w
p
_
e
d
i
t
o
r
 
f
u
n
c
t
i
o
n
 
w
i
l
l
 
o
u
t
p
u
t
 
t
h
e
 
e
d
i
t
o
r
 
i
m
m
e
d
i
a
t
e
l
y
.
 
W
e
 
d
o
n
'
t
 
w
a
n
t
 
t
h
a
t
 
t
o
 
h
a
p
p
e
n
 
s
o
.
.
.
w
e
'
l
l
 
b
u
f
f
e
r
 
t
h
e
 
f
u
n
c
t
i
o
n
'
s
 
r
e
s
p
o
n
s
e
 
a
n
d
 
d
u
m
p
 
i
t
 
i
n
t
o
 
a
 
v
a
r
i
a
b
l
e
 
f
o
r
 
r
e
t
u
r
n
.

 
 
 
 
w
p
_
e
d
i
t
o
r
(
$
c
o
n
t
e
n
t
,
 
$
n
a
m
e
)
;

 
 
 
 
$
c
o
n
t
e
n
t
s
 
=
 
o
b
_
g
e
t
_
c
o
n
t
e
n
t
s
(
)
;

 
 
 
 
o
b
_
e
n
d
_
c
l
e
a
n
(
)
;


 
 
 
 
r
e
t
u
r
n
 
$
c
o
n
t
e
n
t
s
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
c
u
r
r
e
n
t
u
s
e
r
s
_
i
d
(
)

{

 
 
 
 
$
i
d
 
=
 
0
;

	

	
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

	
	
$
u
s
e
r
 
=
 
w
p
_
g
e
t
_
c
u
r
r
e
n
t
_
u
s
e
r
(
)
;

	
	
$
i
d
 
=
 
$
u
s
e
r
-
>
g
e
t
(
'
I
D
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
 
$
i
d
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
c
u
r
r
e
n
t
u
s
e
r
s
_
u
s
e
r
n
a
m
e
(
)

{

 
 
 
 
$
u
s
e
r
n
a
m
e
 
=
 
'
'
;

 
 
 
 
$
u
s
e
r
 
=
 
w
p
_
g
e
t
_
c
u
r
r
e
n
t
_
u
s
e
r
(
)
;

 
 
 
 
$
u
s
e
r
n
a
m
e
 
=
 
$
u
s
e
r
-
>
g
e
t
(
'
u
s
e
r
_
l
o
g
i
n
'
)
;


 
 
 
 
r
e
t
u
r
n
 
$
u
s
e
r
n
a
m
e
;

}


f
u
n
c
t
i
o
n
 
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
$
t
y
p
e
,
 
$
p
a
t
h
 
=
 
'
'
,
 
$
f
i
l
e
n
a
m
e
 
=
 
'
'
,
 
$
i
n
c
l
u
d
e
V
e
r
s
i
o
n
 
=
 
t
r
u
e
,
 
$
a
s
y
n
c
 
=
 
f
a
l
s
e
)

{

 
 
 
 
i
f
 
(
$
f
i
l
e
n
a
m
e
 
=
=
 
'
'
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
c
l
a
s
s
_
e
x
i
s
t
s
(
'
W
P
_
J
o
m
r
e
s
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

 
 
 
 
$
w
p
_
j
o
m
r
e
s
 
=
 
W
P
_
J
o
m
r
e
s
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
)
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
i
n
c
l
u
d
e
V
e
r
s
i
o
n
 
?
 
$
v
e
r
s
i
o
n
 
=
 
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
u
p
d
a
t
e
_
t
i
m
e
'
]
 
:
 
$
v
e
r
s
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
s
t
r
p
o
s
(
$
p
a
t
h
,
 
'
h
t
t
p
'
)
 
=
=
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
$
j
s
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
$
p
a
t
h
.
$
f
i
l
e
n
a
m
e
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
j
s
 
=
 
$
p
a
t
h
.
$
f
i
l
e
n
a
m
e
;

 
 
 
 
}


 
 
 
 
s
w
i
t
c
h
 
(
$
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
c
a
s
e
 
'
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
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
w
p
_
j
o
m
r
e
s
-
>
a
d
d
_
j
s
(
$
f
i
l
e
n
a
m
e
,
 
$
j
s
,
 
$
v
e
r
s
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
c
a
s
e
 
'
c
s
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
c
s
s
 
=
 
'
/
'
.
$
p
a
t
h
.
$
f
i
l
e
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
p
_
j
o
m
r
e
s
-
>
a
d
d
_
c
s
s
(
$
f
i
l
e
n
a
m
e
,
 
$
c
s
s
,
 
$
v
e
r
s
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:


 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}

}


/
/
 
s
e
t
 
o
u
r
 
m
e
t
a
 
d
a
t
a

f
u
n
c
t
i
o
n
 
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
s
e
t
m
e
t
a
d
a
t
a
(
$
m
e
t
a
,
 
$
d
a
t
a
)

{

 
 
 
 
$
d
a
t
a
 
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
d
a
t
a
)
;


 
 
 
 
$
w
p
_
j
o
m
r
e
s
 
=
 
W
P
_
J
o
m
r
e
s
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
)
;


 
 
 
 
s
w
i
t
c
h
 
(
$
m
e
t
a
)
 
{

 
 
 
 
 
 
 
 
c
a
s
e
 
'
t
i
t
l
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
w
p
_
j
o
m
r
e
s
-
>
s
e
t
_
m
e
t
a
_
t
i
t
l
e
(
$
d
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
c
a
s
e
 
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
:

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
d
o
c
u
m
e
n
t
-
>
s
e
t
D
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
(
 
$
d
a
t
a
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
c
a
s
e
 
'
k
e
y
w
o
r
d
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
d
o
c
u
m
e
n
t
-
>
s
e
t
M
e
t
a
D
a
t
a
(
 
'
k
e
y
w
o
r
d
s
'
,
 
$
d
a
t
a
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
d
o
c
u
m
e
n
t
-
>
s
e
t
M
e
t
a
D
a
t
a
(
 
$
m
e
t
a
,
 
$
d
a
t
a
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}

}


/
/
 
A
s
 
p
e
r
 
t
h
e
 
f
u
n
c
t
i
o
n
 
n
a
m
e

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
_
u
s
e
r
s
_
f
r
o
n
t
e
n
d
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
$
i
d
)

{

 
 
 
 
$
u
s
e
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
d
,
u
s
e
r
_
n
i
c
e
n
a
m
e
,
u
s
e
r
_
l
o
g
i
n
,
u
s
e
r
_
e
m
a
i
l
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
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
i
d
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
[
 
$
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
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
'
n
a
m
e
'
 
=
>
 
$
u
-
>
u
s
e
r
_
n
i
c
e
n
a
m
e
,
 
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
 
=
>
 
$
u
-
>
u
s
e
r
_
l
o
g
i
n
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
u
s
e
r
_
e
m
a
i
l
)
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
u
s
e
r
;

}


/
/
 
A
s
 
p
e
r
 
t
h
e
 
f
u
n
c
t
i
o
n
 
n
a
m
e

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
_
u
s
e
r
s
_
f
r
o
n
t
e
n
d
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
u
s
e
r
n
a
m
e
(
$
u
s
e
r
n
a
m
e
)

{

 
 
 
 
$
u
s
e
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
u
s
e
r
_
l
o
g
i
n
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
u
s
e
r
_
l
o
g
i
n
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
u
s
e
r
n
a
m
e
.
"
'
"
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
[
 
$
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
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
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
 
=
>
 
$
u
-
>
u
s
e
r
_
l
o
g
i
n
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
u
s
e
r
_
e
m
a
i
l
)
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
u
s
e
r
;

}


/
/
 
A
s
 
p
e
r
 
t
h
e
 
f
u
n
c
t
i
o
n
 
n
a
m
e

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
_
u
s
e
r
s
_
a
d
m
i
n
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
$
i
d
)

{

 
 
 
 
$
u
s
e
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
d
,
u
s
e
r
_
l
o
g
i
n
,
u
s
e
r
_
e
m
a
i
l
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
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
i
d
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
[
 
$
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
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
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
 
=
>
 
$
u
-
>
u
s
e
r
_
l
o
g
i
n
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
u
s
e
r
_
e
m
a
i
l
)
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
u
s
e
r
;

}


/
/
 
A
s
 
p
e
r
 
t
h
e
 
f
u
n
c
t
i
o
n
 
n
a
m
e

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
_
u
s
e
r
s
_
a
d
m
i
n
_
g
e
t
a
l
l
a
d
m
i
n
s
_
i
d
s
(
)

{

 
 
 
 
$
u
s
e
r
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
 
a
.
i
d
,
 
a
.
u
s
e
r
_
l
o
g
i
n
,
 
a
.
u
s
e
r
_
e
m
a
i
l
 
F
R
O
M
 
#
_
_
u
s
e
r
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
u
s
e
r
m
e
t
a
 
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
u
s
e
r
_
i
d
 
W
H
E
R
E
 
b
.
m
e
t
a
_
k
e
y
 
=
 
'
w
p
_
u
s
e
r
_
l
e
v
e
l
'
 
A
N
D
 
b
.
m
e
t
a
_
v
a
l
u
e
 
>
=
 
1
0
 
"
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
s
[
 
$
u
-
>
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
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
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
 
=
>
 
$
u
-
>
u
s
e
r
_
l
o
g
i
n
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
u
s
e
r
_
e
m
a
i
l
)
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
u
s
e
r
s
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
S
e
a
r
c
h
M
o
d
u
l
e
P
a
r
a
m
e
t
e
r
s
(
$
m
o
d
u
l
e
N
a
m
e
 
=
 
'
'
)

{

 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
m
o
d
u
l
e
N
a
m
e
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
m
o
d
u
l
e
N
a
m
e
 
=
=
 
'
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
g
e
t
I
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
M
o
d
u
l
e
V
a
l
s
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
 
o
p
t
i
o
n
_
v
a
l
u
e
 
F
R
O
M
 
#
_
_
o
p
t
i
o
n
s
 
W
H
E
R
E
 
o
p
t
i
o
n
_
n
a
m
e
 
=
 
'
w
i
d
g
e
t
_
"
.
$
m
o
d
u
l
e
N
a
m
e
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
 
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
,
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
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
a
r
r
 
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
p
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
 
=
 
$
a
r
r
[
2
]
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
a
r
r
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
a
r
r
 
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
v
a
l
s
[
 
$
k
 
]
 
=
 
$
v
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
v
a
l
s
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


/
/
 
R
e
t
u
r
n
s
 
a
n
 
i
n
d
e
x
e
d
 
a
r
r
a
y
 
o
f
 
t
h
e
 
C
M
S
'
s
 
u
s
e
r
s

f
u
n
c
t
i
o
n
 
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
g
e
t
C
M
S
U
s
e
r
s
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

 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
'
;

 
 
 
 
$
u
s
e
r
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
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
W
H
E
R
E
 
`
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

 
 
 
 
}


 
 
 
 
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
d
,
u
s
e
r
_
n
i
c
e
n
a
m
e
,
u
s
e
r
_
l
o
g
i
n
,
u
s
e
r
_
e
m
a
i
l
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
'
.
$
c
l
a
u
s
e
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
s
[
 
$
u
-
>
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
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
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
 
=
>
 
$
u
-
>
u
s
e
r
_
l
o
g
i
n
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
u
s
e
r
_
e
m
a
i
l
)
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
u
s
e
r
s
;

}


f
u
n
c
t
i
o
n
 
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
m
a
k
e
S
E
F
_
U
R
L
(
$
l
i
n
k
)

{

 
 
 
 
/
/
f
o
r
 
n
o
w
 
w
e
 
d
o
n
`
t
 
h
a
v
e
 
w
p
 
r
o
u
t
e
r
 
l
i
k
e
 
i
n
 
j
o
o
m
l
a
 
t
o
 
c
o
n
v
e
r
t
 
a
 
n
o
n
 
p
e
r
m
a
l
i
n
k
 
t
o
 
p
e
r
m
a
l
i
n
k
 
u
r
l
.

 
 
 
 
r
e
t
u
r
n
 
e
s
c
_
u
r
l
_
r
a
w
(
$
l
i
n
k
)
;

}


f
u
n
c
t
i
o
n
 
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
p
a
r
s
e
B
y
B
o
t
s
(
$
s
t
r
)

{

 
 
 
 
r
e
t
u
r
n
 
$
s
t
r
;

}


f
u
n
c
t
i
o
n
 
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
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
s
t
r
)

{

 
 
 
 
r
e
t
u
r
n
 
s
a
n
i
t
i
z
e
_
t
i
t
l
e
(
$
s
t
r
)
;

}


f
u
n
c
t
i
o
n
 
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
c
u
s
t
o
m
t
a
g
(
$
d
a
t
a
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
d
a
t
a
)
 
=
=
 
'
'
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
c
l
a
s
s
_
e
x
i
s
t
s
(
'
W
P
_
J
o
m
r
e
s
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


 
 
 
 
$
w
p
_
j
o
m
r
e
s
 
=
 
W
P
_
J
o
m
r
e
s
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
)
;


 
 
 
 
$
w
p
_
j
o
m
r
e
s
-
>
a
d
d
_
c
u
s
t
o
m
_
m
e
t
a
(
$
d
a
t
a
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


f
u
n
c
t
i
o
n
 
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
c
u
r
r
e
n
t
u
r
l
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
_
S
E
R
V
E
R
[
'
H
T
T
P
_
H
O
S
T
'
]
.
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
Q
U
E
S
T
_
U
R
I
'
]
;

}


f
u
n
c
t
i
o
n
 
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
p
a
t
c
h
J
o
o
m
l
a
T
e
m
p
l
a
t
e
(
$
f
o
r
c
e
 
=
 
f
a
l
s
e
)

{

 
 
 
 
/
/
 
D
o
n
'
t
 
n
e
e
d
 
t
h
i
s
 
i
n
 
W
P

 
 
 
 
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
 
G
e
t
 
t
h
e
 
c
m
s
 
l
a
n
g
u
a
g
e

f
u
n
c
t
i
o
n
 
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
g
e
t
c
m
s
l
a
n
g
(
)

{

 
 
 
 
r
e
t
u
r
n
 
g
e
t
_
b
l
o
g
i
n
f
o
(
'
l
a
n
g
u
a
g
e
'
)
;

}


/
/
 
R
e
t
u
r
n
s
 
a
n
 
i
n
d
e
x
e
d
 
a
r
r
a
y
 
o
f
 
t
h
e
 
C
M
S
'
s
 
u
s
e
r
s
 
w
h
e
r
e
 
u
s
e
r
n
a
m
e
 
m
a
t
c
h
e
s
 
a
 
s
e
a
r
c
h
e
d
 
s
t
r
i
n
g

f
u
n
c
t
i
o
n
 
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
f
i
n
d
_
c
m
s
_
u
s
e
r
s
(
$
s
e
a
r
c
h
_
t
e
r
m
 
=
 
'
'
)

{

 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
'
;

 
 
 
 
$
u
s
e
r
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
$
s
e
a
r
c
h
_
t
e
r
m
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
"
W
H
E
R
E
 
L
O
W
E
R
(
`
u
s
e
r
_
l
o
g
i
n
`
)
 
L
I
K
E
 
'
%
"
.
m
b
_
s
t
r
t
o
l
o
w
e
r
(
$
s
e
a
r
c
h
_
t
e
r
m
)
.
"
%
'
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
u
s
e
r
_
n
i
c
e
n
a
m
e
`
,
 
`
u
s
e
r
_
l
o
g
i
n
`
,
 
`
u
s
e
r
_
e
m
a
i
l
`
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
'
.
$
c
l
a
u
s
e
;

 
 
 
 
$
u
s
e
r
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
u
s
e
r
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
u
s
e
r
L
i
s
t
 
a
s
 
$
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
s
[
 
$
u
-
>
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
i
d
'
 
=
>
 
$
u
-
>
i
d
,
 
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
 
=
>
 
$
u
-
>
u
s
e
r
_
l
o
g
i
n
,
 
'
e
m
a
i
l
'
 
=
>
 
$
u
-
>
u
s
e
r
_
e
m
a
i
l
)
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
u
s
e
r
s
;

}


f
u
n
c
t
i
o
n
 
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
g
e
t
U
s
e
r
n
a
m
e
(
$
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

	
	
r
e
t
u
r
n
;

	
}

	

	
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
u
s
e
r
_
l
o
g
i
n
`
 
F
R
O
M
 
#
_
_
u
s
e
r
s
 
W
H
E
R
E
 
`
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
u
s
e
r
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


f
u
n
c
t
i
o
n
 
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
g
e
t
C
m
s
U
s
e
r
P
r
o
f
i
l
e
L
i
n
k
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

	
	
r
e
t
u
r
n
 
'
#
'
;

	
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
a
d
m
i
n
_
u
r
l
(
'
'
,
 
'
u
s
e
r
-
e
d
i
t
.
p
h
p
?
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
 
'
a
d
m
i
n
'
)
;

	

	
r
e
t
u
r
n
 
$
u
r
l
;

}


f
u
n
c
t
i
o
n
 
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
i
s
R
t
l
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

	
$
i
s
R
t
l
 
=
 
i
s
_
r
t
l
(
)
;

	

	
r
e
t
u
r
n
 
$
i
s
R
t
l
;

}


f
u
n
c
t
i
o
n
 
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
u
s
e
r
_
i
s
_
a
d
m
i
n
(
)
 
{

	
i
f
 
(
 
c
u
r
r
e
n
t
_
u
s
e
r
_
c
a
n
(
 
'
m
a
n
a
g
e
_
o
p
t
i
o
n
s
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

